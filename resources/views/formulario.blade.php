<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reiki2.css') }}">
    <title>Control de pacientes Reiki</title>
</head>
<body>
    <div class="bg">
        <div>
            <header>
                <h1>BASE DE DATOS SOBRE PACIENTES</h1>
                <nav></nav>
            </header>
        </div>
        <div>
            <main class="form">
                <article>
                    <form action="form.php" name="MainForm" id="form" method="POST" target="reiki.php" onsubmit="PForm(); return false;">
                        <script src="{{ asset('js/sanitize.js')}}"></script>
                        <ul>
                            <li>
                                <label for="id">ID:</label>
                                <input type="text" title="" id="id" name="ID" placeholder="Id del paciente (no es necesario introducirlo)">
                            </li>
                            <li>
                                <label for="name">Nombre:</label>
                                <input type="text" title="" id="name" name="Name" placeholder="Nombre">
                            </li>
                            <li>
                                <label for="surname1">Primer apellido:</label>
                                <input type="text" title="" id="surname1" name="Surname1" placeholder="Primer apellido">
                            </li>
                            <li>
                                <label for="surname2">Segundo apellido:</label>
                                <input type="text" title="" id="surname2" name="Surname2" placeholder="Segundo apellido">
                            </li>
                            <li>
                                <label for="birthdate">Año de nacimiento:</label>
                                <input type="text" title="" id="birthdate" name="Birthdate" placeholder="Año de nacimiento">
                            </li>
                            <li>
                                <label for="phone">Numero de telefono:</label>
                                <input type="text" title="" id="phone" name="PhoneNumber" placeholder="Numero de telefono">
                            </li>
                            <li>
                                <label for="email">Correo Electronico:</label>
                                <input type="text" title="" id="email" name="Email" placeholder="nombre@correo.com">
                            </li>
                            <li>
                                <label for="observations">Observaciones:</label>
                                <textarea name="Comments" title="" id="comments" placeholder="Observaciones"></textarea>
                            </li>
                        </ul>
                        <ul>
                            <li class="button">
                                <label for="send"></label>
                                <button type="submit" name="Send" title="" id="send">Enviar</button>
                            </li>
                            <li class="button">
                                <label for="reset"></label>
                                <button type="reset" name="Reset" title="" id="reset">Reset</button>
                            </li>
                        </ul>
                    </form>
                </article>
            </main>
        </div>
        <div>
            <aside>

            </aside>
        </div>
        <div>
            <footer>
                <p class="copy">&copy; <!--The Orbserver.--> Setcom WEB. 2023</p>
            </footer>
        </div>
    </div>  
</body>
</html>
