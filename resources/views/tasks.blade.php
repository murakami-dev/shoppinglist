@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    </head>
    <body>
        <!-- <img src="https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80"> -->
    </body>
</html>
<h1>お買い物リスト</h1>
<form action="/tasks" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
        <lavel for="task-name" class="col-sm-3 control-lavel">品名</lavel>
        <div class="col-sm-6">
            <input type="text" name="name" id="task-name">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i>追加
            </button>
        </div>
    </div>
</form>


<table class="table table-striped task-table">
    <thead>
        <th>買うもの</th><th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                {{$task->name}}
                </td>
                <td>
                    <form action="/tasks/{{$task->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button>購入済み</button>
                    </form>
                </td>
            </tr>
         @endforeach
    </tbody>
</table>

@endsection
