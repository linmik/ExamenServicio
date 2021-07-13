@extends('layouts.base') @section('content')
<h1 class="h1 text-center">materia</h1>
<h3 class="h3 text-left">Creditos: {{$materia->creditos}}</h3>
<h3 class="h3 text-left">Nombre: {{$materia->nombre}}</h3>
<h3 class="h3">Profesor: {{$materia->profesor}}</h3>
<h3 class="h3">Turno: {{$materia->turno}}</h3>
<h3 class="h3">disponible: {{$materia->disponible}}</h3>

<h2 class="h2 text-center">Estudiantes en la materia</h2>

<div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="name">Id</th>
          <th scope="col" class="sort" data-sort="name">Nombre</th>
          <th scope="col" class="sort " data-sort="name">Código</th>
          <th scope="col" class="sort " data-sort="name">Carrera</th>
          <th scope="col" class="sort " data-sort="name">Créditos cursados</th>
          <th scope="col" class="sort " data-sort="name">Correo</th>
        </tr>
      </thead>
      <tbody class="list">
          @foreach ($materia->estudiantes as $estudiante)
          <tr>
              <td class="name">{{$estudiante->id}}</td>
              <td class="name">{{$estudiante->nombre}}</td>
              <td class="name">{{$estudiante->codigo}}</td>
              <td class="name">{{$estudiante->carrera}}</td>
              <td class="name">{{$estudiante->creditos}}</td>
              <td class="name">{{$estudiante->correo}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
  <div class="text-center">
    <a class="btn btn-icon btn-danger align-items-center" href="{{route('Materia.index')}}">
        <span class="h5 text-white">Regresar</span>
    </a>
  </div>
</div>

@endsection
