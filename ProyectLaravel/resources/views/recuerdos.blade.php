@extends('layouts.plantilla')
@section('titulo','RECUERDOS')
@section('contenido')
    <h1 class="display-1 text-center text-info">RECUERDOS</h1>

    @foreach ($consultaR as $item)

    <div class='container mt-5 col-md-6'>
    <div class="card">
        <h5 class="card-header fw-bold">{{$item->titulo}}</h5>
        <div class="card-body">
          <p class="card-text">{{$item->fecha}}</p>
          <p class="card-text">{{$item->recuerdo}}</p>
          <a href="#" class="btn btn-outline-info">Editar</a>
          <a href="#" class="btn btn-outline-info">Borrar</a>
        </div>
    </div>
    </div>
    @endforeach

{{-- @include('partials.pagination') --}}

@endsection