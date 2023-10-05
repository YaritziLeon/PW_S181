@extends('layouts.plantilla')
@section('titulo','BUSQUEDA')
@section('contenido')
    <h1 class="display-1 text-center text-danger">BUSQUEDA</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre: </span>
        <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
    </div>
    <button type="button" class="btn btn-outline-info">Buscar</button><br>
    @include('partials.card')
@endsection