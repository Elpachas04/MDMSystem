{{--create master template--}}
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>MDMSystem - Prueba</title>
    </head>
    <body>
        @section('header')
            Master header
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            Master footer
        @show
    </body>
</html>