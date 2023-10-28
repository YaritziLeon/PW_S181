@extends('layouts.plantilla')
@section('titulo','REGISTRO')
@section('contenido')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <h1 class="display-3 text-center text-info fw-bold">REGISTRO DE LIBROS</h1>

    <div class='container mt-5 col-md-6'>
    {{-- @if (session()->has('confirmacion'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        {{session('confirmacion')}}
      </div>
    </div>
    @endif --}}

    
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
    


    <form method="POST" action="/guardarlibro">
      @csrf
          <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">ISBN: </label>
          <div class="col-sm-10">
          <input type="text" name="txtISBN" class="form-control" value="{{old('txtISBN')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('txtISBN')}}
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Titulo: </label>
          <div class="col-sm-10">
          <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('txtTitulo')}}
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Autor: </label>
          <div class="col-sm-10">
          <input type="text" name="txtAutor" class="form-control" value="{{old('txtAutor')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('txtAutor')}}
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Páginas: </label>
          <div class="col-sm-10">
          <input type="number" name="Paginas" class="form-control" value="{{old('Paginas')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('Paginas')}}
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Editorial: </label>
          <div class="col-sm-10">
          <input type="text" name="txtEditorial" class="form-control" value="{{old('txtEditorial')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('txtEditorial')}}
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-1 col-form-label">Email: </label>
          <div class="col-sm-10">
          <input type="email" name="Email" class="form-control" value="{{old('Email')}}">
          <p class="text-danger fst-italic fw-bold">{{$errors->first('Email')}}
          </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto col-sm-10 mb-5 row">
          <button class="btn btn-outline-info" type="submit">Registrar</button>
        </div>

    </div>

@endsection