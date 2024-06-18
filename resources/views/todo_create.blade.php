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
    </head>
    <body class="antialiased">

        <h1>Create Todo</h1>

        <a href="todo_show">Back</a><br /><br />

        <form action="todo_submit" method="post">
            @csrf
            <table id="todos">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>

        

        </div>
    </body>