<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <script>{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Mi aplicacion</title>
</head>
<body>
    <header>
        <h1>nombre de la barra header</h1>
        <nav>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </nav>
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