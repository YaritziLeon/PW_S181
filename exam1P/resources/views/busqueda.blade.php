@extends('layouts.plantilla')
@section('titulo','BUSQUEDA')
@section('contenido')
    <h1 class="display-1 text-center text-danger">BUSQUEDA</h1>
    <label for="nombre">Nombre: </label>
    <input type="nombre" id="nombre" name="nombre" required/><br><br>
    <button name="button">Buscar</button>
@endsection