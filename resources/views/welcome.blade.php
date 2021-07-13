@extends('layouts.base') @section('content')
<div class="row align-items-center">
    <div class="col-8">
      <h1 class="mb-0">
          CRUD Estudiantes
      </h1>
    </div>
</div>

<div class="row">
    <div style="width: 10%"></div>
    <div class="text-left">
        <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Estudiante.index') }}" >
            <span class="h5 text-white">Estudiantes</span>
        </a>
    </div>
    <div style="width: 20%"></div>
    <div class="text-center">
        <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Materia.index') }}" >
            <span class="h5 text-white">Materias</span>
        </a>
    </div>
    <div style="width: 20%"></div>
    <div class="text-right">
        <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Estudiante.index') }}" >
            <span class="h5 text-white">Relacion Materia Estudiante</span>
        </a>
    </div>
</div>

@endsection
