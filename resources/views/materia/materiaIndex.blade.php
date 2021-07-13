@extends('layouts.base') @section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h1 class="mb-0">
                    Materias
                </h1>
              </div>
              <div class="col-4 text-right">
                <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Materia.create') }}" >
                    <span class="h5 text-white">Agregar Materia</span>
                </a>
              </div>
            </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Id</th>
                <th scope="col" class="sort" data-sort="name">Créditos</th>
                <th scope="col" class="sort " data-sort="name">Nombre</th>
                <th scope="col" class="sort " data-sort="name">Profesor</th>
                <th scope="col" class="sort " data-sort="name">turno</th>
                <th scope="col" class="sort " data-sort="name">Disponible</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach ($materias as $materia)
                <tr>
                    <td class="name">{{$materia->id}}</td>
                    <td class="name">{{$materia->creditos}}</td>
                    <td class="name">{{$materia->nombre}}</td>
                    <td class="name">{{$materia->profesor}}</td>
                    <td class="name">{{$materia->turno}}</td>
                    <td class="name">{{$materia->disponible? "Si":"No"}}</td>
                    <td class="text-right">
                        <form action="{{route('Materia.destroy',[$materia])}}" method="post" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-icon btn-outline-danger">
                            <span class="btn-inner--icon">
                                <i class="fa fa-trash"></i>
                            </span>
                            </button>
                        </form>
                        <a class="btn btn-icon btn-outline-info" href="{{ route('Materia.edit', $materia) }}">
                            <span class="btn-inner--icon">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                        <a class="btn btn-icon btn-outline-info" href="{{ route('Materia.show', $materia) }}">
                            <span class="btn-inner--icon">
                                detalles
                            </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <div class="text-center">
          <a class="btn btn-icon btn-danger align-items-center" href="/" >
              <span class="h5 text-white">Pagina Principal</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
