@extends('layouts.plantilla')
@section('titulo','LOGIN')
@section('contenido')
    <h1 class="display-1 text-center text-danger">Login</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Usuario: </span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Contraseña: </span>
        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
    </div>
    <button type="button" class="btn btn-outline-info">Entrar</button>
@endsection