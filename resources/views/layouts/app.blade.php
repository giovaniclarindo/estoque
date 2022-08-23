<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Topo do meu sistema!
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>