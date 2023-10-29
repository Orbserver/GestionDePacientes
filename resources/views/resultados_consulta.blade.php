@extends('plantillaReiki')

@section('content')

<h1>Este es el resultado de la consulta de pacientes</h1>

@if ($resultados->isEmpty())
    <p>Nose encontraron resultados para esta consulta</p>
@else
    <table>
        <tr>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Otros detalles</th>
        </tr>
        @foreach ($resultados as $paciente)
        <tr>
            <td>{{ $paciente->nombre }}</td>
            <td>{{ $paciente->primer_apellido }}</td>
            <td>{{ $paciente->segundo_apellido }}</td>
            <td>{{ $paciente->fecha_nacimiento }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->email }}</td>
            <td>{{ $paciente->otros_detalles }}</td>
        </tr>
        @endforeach
    </table>
@endif
@endsection