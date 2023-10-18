@extends('plantillaReiki')

@section('content')
    <div>
        <h1>Introducir nuevo paciente</h1>
        <main class="form">
            <article>
                <form action="form.php" name="MainForm" id="form" method="POST" target="reiki.php" onsubmit="PForm(); return false;">
                    @csrf {{-- Token CSRF para seguridad --}}
                    <script src="{{ asset('js/sanitize.js') }}"></script>
                    <div>
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="ID"
                            placeholder="Id del paciente (no es necesario introducirlo)">
                    </div>
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" placeholder="Nombre">
                    </div>
                    <div>
                        <label for="surname1">Primer apeldivdo:</label>
                        <input type="text" id="surname1" name="surname1" placeholder="Primer apeldivdo">
                    </div>
                    <div>
                        <label for="surname2">Segundo apeldivdo:</label>
                        <input type="text" id="surname2" name="surname2" placeholder="Segundo apeldivdo">
                    </div>
                    <div>
                        <label for="birthdate">Año de nacimiento:</label>
                        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento"
                            placeholder="Año de nacimiento">
                    </div>
                    <div>
                        <label for="phone">Numero de telefono:</label>
                        <input type="text" id="phone" name="phone" placeholder="Numero de telefono">
                    </div>
                    <div>
                        <label for="email">Correo Electronico:</label>
                        <input type="text" id="email" name="email" placeholder="nombre@correo.com">
                    </div>
                    <div>
                        <label for="observations">Otros detalles::</label>
                        <textarea name="otros_detalles" id="otros_detalles"></textarea>
                    </div>
                    <ul>
                        <li class="button">
                            <label for="send"></label>
                            <button type="submit" name="Send" id="send">Enviar</button>
                        </li>
                        <li class="button">
                            <label for="reset"></label>
                            <button type="reset" name="Reset" id="reset">Reset</button>
                        </li>
                    </ul>
                </form>
            </article>
        </main>
    </div>
@endsection
