"use strict"
var list_todo = $('#list-todo');
var btnAdd = $('#btn-add');
var btnRem = $('#btn-remove');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function build_list(data)
{
    if(data == null) return false;
    list_todo.html("");
    $.each(data, function(key, val){
        list_todo.append('<div class="custom-control custom-checkbox">'+
                           '<input type="checkbox" class="custom-control-input list-item" value="'+ val.id +'" id="todo-'+ val.id +'">'+
                           '<label class="custom-control-label" for="todo-'+ val.id +'">'+ val.todo +'</label>'+
                           '</div>');
    });
}

btnAdd.click(function(e){
    e.preventDefault();
    $.post(url_todo, {todo: $('#txt-todo').val()}, function(data){
        build_list(data);
    });
    $('#txt-todo').val("");
});

btnRem.click(function(e){
    e.preventDefault();
    
    var id = $(".list-item:checkbox:checked").map(function(){
        return $(this).val();
    }).toArray();
    $.post(url_todo+'/delete', {id: id}, function(data){
        build_list(data);
    });
});

$( document ).ready(function() {
    $.get(url_todo, function(data){
        build_list(data);
    });
});