@extends('layouts.plantilla')
@section('contenido')
    <div class='container mt-5 col-md-6'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session()->has('confirmacion'))
      <script>
        Swal.fire({
        icon: 'success',
        title: '{{session('confirmacion')}}',
        showConfirmButton: false,
        timer: 1500
        })
      </script>
      @endif

    @if($errors->any())
      @foreach ($errors->all() as $error)
          
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $error }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endforeach
    @endif

    <form method="POST" action="/registro">
        @csrf
    <h1 class="display-3 text-center text-info fw-bold">REGISTRO</h1>
        <div class="mb-3 row">
        <label class="col-sm-1 col-form-label">Nombre: </label>
        <div class="col-sm-5">
        <input type="text" name="txtNombre" class="form-control" value="{{old('txtNombre')}}">
        <p class="text-danger fst-italic fw-bold">
        </div>
        </div>
        <div class="mb-3 row">
        <label class="col-sm-1 col-form-label">Fecha de Publicación: </label>
        <div class="col-sm-5">
        <input type="date" name="Fecha" class="form-control" value="{{old('Fecha')}}">
        <p class="text-danger fst-italic fw-bold">
        </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-1 col-form-label">Video Juegos Vendidos: </label>
            <div class="col-sm-5">
            <input type="numeric" name="Vendidos" class="form-control" value="{{old('Vendidos')}}">
            <p class="text-danger fst-italic fw-bold">
            </div>
            </div>
            <div class="card-footer text-body-secondary text-uppercase">
                <button type="submit" class="btn btn-outline-info">RESGISTRAR</button>
            </div>
</div>


@endsection