<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TodoController extends Controller
{
    public function index(){
        $todo = DB::table('todo')->get();
        return response()->json($todo);
    }

    public function post(Request $request){
        DB::table('todo')->insert(['todo'=>$request->todo, 'created'=>date('Y-m-d H:i:s')]);
       return $this->index();
    }

    public function delete(Request $request){
        if(!empty($request->id)){
            if(is_array($request->id))
            {
                DB::table('todo')->whereIn('id', $request->id)->delete();
            }else{
                DB::table('todo')->where('id', $request->id)->delete();
            }
        }
        return $this->index();
    }
}
