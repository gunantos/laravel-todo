<!DOCTYPE html>
<html>
    <head>
        <title>TODO</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .card-body {
                text-align: left;
            }
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            <h1>TODO</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="add to do" aria-label="add to do" aria-describedby="button-addon2" id="txt-todo">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="btn-add">ADD</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="list-todo">
                        
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning" type="button" id="btn-remove">REMOVE SELECTED</button>
                    </div>
                </div>
            </div>
        </div>
        <script>var url_todo = "<?= url('/todo') ?>";</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="{{asset('app.js')}}"></script>
    </body>
</html>
