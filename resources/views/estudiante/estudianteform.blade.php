@extends('layouts.base') @section('content')
<div class="row align-items-center">
    <div class="col-8">
      <h1 class="mb-0">
          Registrar Estudiante
      </h1>
    </div>
</div>
<div class="card-body">
    @if(isset($Estudiante))
    <form action="{{route('Estudiante.update', $Estudiante)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        <input type="hidden" name="id" value="{{ $Estudiante->id }}">
    @else
    <form action="{{route('Estudiante.store')}}" method="post" enctype="multipart/form-data">
    @endif
        @csrf
        <div class="pl-lg-4">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-control-label" for="nombre">Nombre</label>
                        <input id='nombre' type="text" name="nombre" class="form-control" value="{{ isset($Estudiante) ? $Estudiante->nombre: ""}}" required>
                    </div>
                    <div class='form-group'>
                        <label class="form-control-label" for="codigo">Código (9 digitos)</label>
                        <input type="text" value="{{ isset($Estudiante) ? $Estudiante->codigo: ""}}" id='codigo' name="codigo" class="form-control" required pattern="[0-9]{9}">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="carrera">Carrera</label>
                        <input id='carrera' type="text" name="carrera" class="form-control" value="{{ isset($Estudiante) ? $Estudiante->carrera: ""}}">
                    </div>
                    <div class='form-group'>
                        <label class="form-control-label" for="creditos">Créditos Cursados</label>
                        <input type="number" value="{{ isset($Estudiante) ? $Estudiante->creditos : 0}}" id='creditos' name="creditos" class="form-control" required min="0">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="correo">Correo</label>
                        <input id='correo' type="email" name="correo" class="form-control" value="{{ isset($Estudiante) ? $Estudiante->correo: ""}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary my-4" value="{{ isset($Estudiante) ? 'Actualizar' : 'Registrar' }}">
        </div>
    </form>
</div>
@endsection
