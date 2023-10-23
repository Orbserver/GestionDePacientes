<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <script{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Mi aplicacion</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">Consultas</a>
    </header>

    <content>
        <div class="content">
            @yield('content')
        </div>
    </content>
    <footer>
        <p><!--The Orbserver-->&copy; Setcom Web Development 2023</p>
    </footer>
</body>
</html>