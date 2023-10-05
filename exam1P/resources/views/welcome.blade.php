@extends('layouts.plantilla')
@section('titulo','LOGIN')
@section('contenido')
    <h1 class="display-1 text-center text-danger">Login</h1>
    <label for="usuario">Usuario: </label>
    <input type="text" id="usuario" name="usuario" required size="10"/><br><br>
    <label for="password">Contraseña: </label>
    <input type="password" id="password" name="password" required/><br><br>
    <button name="button">Entrar</button>
@endsection