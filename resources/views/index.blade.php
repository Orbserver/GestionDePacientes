@extends('plantillaReiki')

@section('content')

<h1>Selecciona una opcion</h1>
<div class="menu">
    <a href="{{ url('/consulta-paciente') }}" class="btn btn-primary">Consultar Paciente</a>
    <a href="{{ url('/nuevo-paciente') }}" class="btn btn-primary">Crear Nuevo Paciente</a>
</div>

@endsection