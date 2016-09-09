@extends('layouts.master')

@section('content')

<h1>Sitios de interés registrados:</h1>
<p class="lead">Lista de sitios. <a href="{{url('Sitios.create')}}">crear uno nuevo</a></p>
<hr>



<p>
    <a href="{{url('Sitios.show')}}" class="btn btn-info">ver sitio</a>
    <a href="{{url('Sitios.edit')}}" class="btn btn-primary">editar sitio</a>
</p>
<hr>


@stop
