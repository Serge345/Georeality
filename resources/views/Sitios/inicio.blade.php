@extends('layouts.master')

@section('content')

<h1>Bienvenidos a Georeality</h1>
<h2>Seleccione una opción</h2>
<p class="lead">
</p>
<hr>
<a href="{{ url('sitio') }}" class="btn btn-info">Ver Sitios</a>
<a href="{{ url('sitio/create') }}" class="btn btn-primary">Agregar un nuevo sitio</a>


@stop
