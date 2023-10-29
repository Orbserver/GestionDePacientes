@extends('plantillaReiki')

@section('content')

<h1>Este es el resultado de la consulta de pacientes</h1>

@if ($resultados->isEmpty())
    <p>No se encontraron resultados para esta consulta</p>
@else
    <div>
        <table>
            <div class="table-header">
            <tr>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Otros detalles</th>
            </tr>
            </div>
            @foreach ($resultados as $paciente)
            <tr>
            <div class="table-row">
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->primer_apellido }}</td>
                <td>{{ $paciente->segundo_apellido }}</td>
                <td>{{ $paciente->fecha_nacimiento }}</td>
                <td>{{ $paciente->telefono }}</td>
                <td>{{ $paciente->email }}</td>
                <td>{{ $paciente->otros_detalles }}</td>
            </tr>
            </div>
            @endforeach
        </table>
    </div>
    <div class="menu">
        <a href="{{ url('/consulta-paciente') }}" class="btn btn-primary">Realizar otra consulta</a>
        <a href="{{ url('/nuevo-paciente') }}" class="btn btn-primary">Crear Nuevo Paciente</a>
    </div>
@endif
@endsection