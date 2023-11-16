@extends('layouts.plantilla')
@section('titulo','FORMULARIO')
@section('contenido')
    <h1 class="display-1 text-center text-info">FORMULARIO</h1>

    <div class='container mt-5 col-md-6'>
      @if(session()->has('confirmacion'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> {{session('confirmacion')}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      {{-- @if($errors->any())
      @foreach ($errors->all() as $error)
          
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $error }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endforeach
      @endif --}}

    <div class="card">
        <div class="card-header fs-3 fw-bold text-center">
          Introduce aqui tus memorias...
        </div>
        <div class="card-body">
            <form method="POST" action="/recuerdo">
              @csrf
                <div class="mb-3">
                  <label class="form-label">Titulo: </label>
                  <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
                  <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtTitulo')}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Recuerdos: </label>
                    <input type="text" name="txtRecuerdos" class="form-control" value="{{old('txtRecuerdos')}}">
                    <p class="text-danger fst-italic fw-bold">{{$errors->first('txtRecuerdos')}}
                  </div>
        </div>
        <div class="card-footer text-body-secondary text-uppercase">
            <button type="submit" class="btn btn-outline-info">Guardar Recuerdo</button>
        </form>
        </div>
      </div><!--cierre de la tarjeta-->
    </div> <!--cierre del contenedor-->
@endsection