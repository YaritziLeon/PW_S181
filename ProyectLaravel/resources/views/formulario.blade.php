@extends('layouts.plantilla')
@section('titulo','FORMULARIO')
@section('contenido')
    <h1 class="display-1 text-center text-info">FORMULARIO</h1>

    <div class='container mt-5 col-md-6'>

    <div class="card">
        <div class="card-header fs-3 fw-bold text-center">
          Introduce aqui tus memorias...
        </div>
        <div class="card-body">
            <form method="POST" action="/guardarRecuerdo">
              @csrf
                <div class="mb-3">
                  <label class="form-label">Titulo: </label>
                  <input type="text" name="txtTitulo" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Recuerdos: </label>
                    <input type="text" name="txtRecuerdos" class="form-control">
                  </div>
        </div>
        <div class="card-footer text-body-secondary text-uppercase">
            <button type="submit" class="btn btn-outline-info">Guardar Recuerdo</button>
        </form>
        </div>
      </div><!--cierre de la tarjeta-->
    </div> <!--cierre del contenedor-->
@endsection