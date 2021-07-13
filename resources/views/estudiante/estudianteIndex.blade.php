@extends('layouts.base') @section('content')
{{-- <script type="text/javascript" src="{{ asset('assets/js/pets/destroy.js') }}"></script> --}}
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h1 class="mb-0">
                    Estudiantes
                </h1>
              </div>
              <div class="col-4 text-right">
                <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Estudiante.create') }}" >
                    <span class="h5 text-white">Agregar estudiante</span>
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
                <th scope="col" class="sort" data-sort="name">Nombre</th>
                <th scope="col" class="sort " data-sort="name">Código</th>
                <th scope="col" class="sort " data-sort="name">Carrera</th>
                <th scope="col" class="sort " data-sort="name">Créditos cursados</th>
                <th scope="col" class="sort " data-sort="name">Correo</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach ($estudiantes as $estudiante)
                <tr>
                    <td class="name">{{$estudiante->nombre}}</td>
                    <td class="name">{{$estudiante->codigo}}</td>
                    <td class="name">{{$estudiante->carrera}}</td>
                    <td class="name">{{$estudiante->creditos}}</td>
                    <td class="name">{{$estudiante->correo}}</td>
                    <td class="text-right">
                        <form action="{{route('Estudiante.destroy',[$estudiante])}}" method="post" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-icon btn-outline-danger">
                            <span class="btn-inner--icon">
                                <i class="fa fa-trash"></i>
                            </span>
                            </button>
                        </form>
                        <a class="btn btn-icon btn-outline-info" href="{{ route('Estudiante.edit', $estudiante) }}">
                            <span class="btn-inner--icon">
                                <i class="fas fa-pen"></i>
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
