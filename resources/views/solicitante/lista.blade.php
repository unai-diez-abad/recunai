@extends('layout.header')



@section("content")

<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="col text-center mb-4">Lista de todos los solicitantes</h2>
            <div class="card ">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true" style="position: relative; max-height:500px;">
                @if(count($solicitantes) != 0)
                    <table class="table table-dark mb-0">
                    <thead class="sticky-top" style="background-color: #393939; ">
                      <tr class="text-uppercase text-success ">
                        <th scope="col">nombre</th>
                        <th scope="col">apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">direcion_residencia</th>
                        <th scope="col">email</th>
                        <th scope="col">tel</th>
                      </tr>
                    </thead>
                    <tbody>
        @foreach($solicitantes as $solicitante)
            <tr>
                        <td>{{ $solicitante->nombre }}</td>
                        <td>{{ $solicitante->apellidos }}</td>
                        <td>{{ $solicitante->DNI }}</td>
                        <td>{{ $solicitante->direcion_residencia }}</td>
                        <td>{{ $solicitante->email }}</td>
                        <td>{{ $solicitante->tel }}</td>
                      </tr>
        @endforeach
                    </tbody>
                  </table>
                    @else
                        <p>No hay solicitantes</p>
                    @endif 
                </div>
                
              </div>
            </div>
            <div class=" col text-center mt-4">
              <a  class="float-right btn btn-outline-primary btn-lg" role="button" aria-pressed="true" href="{{route('solicitante.create') }}">
               Crear nuevo solicitante
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
@endsection
