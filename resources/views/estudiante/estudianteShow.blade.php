@extends('layouts.base') @section('content')
<h1 class="h1 text-center">Estudiante</h1>
<h3 class="h3 text-left">Nombre: {{$Estudiante->nombre}}</h3>
<h3 class="h3 text-left">Codigo: {{$Estudiante->codigo}}</h3>
<h3 class="h3">Carrera: {{$Estudiante->carrera}}</h3>
<h3 class="h3">Creditos: {{$Estudiante->creditos}}</h3>
<h3 class="h3">Correo: {{$Estudiante->correo}}</h3>

<div class="row">
    <form action="{{route('agregarMaterias',[$Estudiante])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="id_m">->    Id materia</label>
        <input id='id_m' type="number" name="id_m" value="" required>
        <input type="submit" class="btn btn-primary my-4" value="Agregar Materia" }}">
        </div>
    </form>
</div>
<h2 class="h2 text-center">Materias del estudiante</h2>

<div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="name">Id materia</th>
          <th scope="col" class="sort" data-sort="name">Créditos</th>
          <th scope="col" class="sort " data-sort="name">Nombre</th>
          <th scope="col" class="sort " data-sort="name">Profesor</th>
          <th scope="col" class="sort " data-sort="name">turno</th>
          <th scope="col" class="sort " data-sort="name">Disponible</th>
        </tr>
      </thead>
      <tbody class="list">
          @foreach ($Estudiante->materias as $materia)
          <tr>
              <td class="name">{{$materia->id}}</td>
              <td class="name">{{$materia->creditos}}</td>
              <td class="name">{{$materia->nombre}}</td>
              <td class="name">{{$materia->profesor}}</td>
              <td class="name">{{$materia->turno}}</td>
              <td class="name">{{$materia->disponible? "Si":"No"}}</td>
          @endforeach
      </tbody>
    </table>
  </div>
  <div class="text-center">
    <a class="btn btn-icon btn-danger align-items-center" href={{route('Estudiante.index')}}>
        <span class="h5 text-white">Regresar</span>
    </a>
  </div>
@endsection
