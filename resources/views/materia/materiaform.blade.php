@extends('layouts.base') @section('content')
<div class="row align-items-center">
    <div class="col-8">
      <h1 class="mb-0">
          Registrar Materia
      </h1>
    </div>
</div>
<div class="card-body">
    @if(isset($materia))
    <form action="{{route('Materia.update', [$materia])}}" method="post" enctype="multipart/form-data">
        @method('patch')
        <input type="hidden" name="id" value="{{ $materia->id }}">
    @else
    <form action="{{route('Materia.store')}}" method="post" enctype="multipart/form-data">
    @endif
        @csrf
        <div class="pl-lg-4">
            <div class="row">
                <div class="col">
                    <div class='form-group'>
                        <label class="form-control-label" for="creditos">Créditos</label>
                        <input type="number" value="{{ isset($materia) ? $materia->creditos : 1}}" id='creditos' name="creditos" class="form-control" required min="1">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="nombre">Nombre</label>
                        <input id='nombre' type="text" name="nombre" class="form-control" value="{{ isset($materia) ? $materia->nombre: ""}}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="profesor">Profesor</label>
                        <input id='profesor' type="text" name="profesor" class="form-control" value="{{ isset($materia) ? $materia->profesor: ""}}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="turno">Turno</label>
                        <input id='turno' type="text" name="turno" class="form-control" value="{{ isset($materia) ? $materia->turno: ""}}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="disponible">Disponible</label>
                        <input type="radio" id="disponible" name="disponible" value="1" checked> Si </input>
                        <input type="radio" id="disponible" name="disponible" value="0"> No </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary my-4" value="{{ isset($materia) ? 'Actualizar' : 'Registrar' }}">
        </div>
    </form>
</div>
@endsection
