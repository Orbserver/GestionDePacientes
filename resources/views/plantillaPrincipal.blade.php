<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="SetPatientCare">
    <meta name="application-name" content="SetPatientCare">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script{{ asset('js/bootstrap.min.js') }}"></script>
    <title>SetPatientCare</title>
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