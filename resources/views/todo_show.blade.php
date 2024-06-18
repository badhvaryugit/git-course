<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            #todos {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #todos td, #todos th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #todos tr:nth-child(even){background-color: #f2f2f2;}

            #todos tr:hover {background-color: #ddd;}

            #todos th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
        <!-- /Styles -->
    </head>
    <body class="antialiased">

        <h1>Todo List</h1>

        <a href="todo_create">Create Todo Entry</a><br /><br />

        @if (\Session::has('msg'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('msg') !!}</li>
                </ul>
            </div>
        @endif
            
        <div class="flex-center position-ref full-height">

            <table id="todos" border="1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @foreach ($todoArr as $todo)
                <tr>
                    <td>{{ $todo->id}}</td>
                    <td>{{ $todo->name}}</td>
                    <td>{{ $todo->created_at}}</td>
                    <td>
                        <a href="todo_edit/{{ $todo->id }}">Edit</a>
                        <a href="todo_delete/{{ $todo->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
