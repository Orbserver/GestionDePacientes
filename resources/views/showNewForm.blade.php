@extends('plantillaReiki')

@section('content')
    <div>
        <h1>Introducir nuevo paciente</h1>
        <form action="/consulta-paciente" method="POST" name=newPaciente target="" onsubmit="PForm(); return false;">
            @csrf {{-- Token CSRF para seguridad --}}
            <script src="{{ asset('js/sanitize.js') }}"></script>
            <div class="form-group">
                <label for="nombre">Nombre del paciente:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del paciente">
            </div>
            <div class="form-group">
                <label for="primer_apellido">Primer Apellido:</label>
                <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido del paciente">
            </div>
            <div class="form-group">
                <label for="segundo_apellido">Segundo Apellido:</label>
                <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido del paciente">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
            </div>
            <div class="form-group">
                <label for="telefono">Numero de telefono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Numero de teléfono">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@correo.com">
            </div>
            <div class="form-group">
                <label for="otros_detalles">Otros detalles:</label>
                <textarea class="form-control" id="otros_detalles" name="otros_detalles" placeholder="Alergias, condiciones médicas, etc."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection
