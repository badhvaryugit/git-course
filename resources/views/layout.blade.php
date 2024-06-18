<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="header">
            <h2>Header Section</h2>
        </div>

        <div id="container">
            @section('container')
            <h2>Container Data</h2>      
            @show
        </div>

        <div id="footer">
            <h2>Footer Section</h2>
        </div>
    </body>
</html>