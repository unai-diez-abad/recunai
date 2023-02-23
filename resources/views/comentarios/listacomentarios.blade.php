@extends('layout.header')



@section("content")


<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
          <h2 class="col text-center mb-4">Lista de comentarios</h2>
            <div class="card ">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true" style="position: relative; max-height:500px;">
                @if(count($comentarios) != 0)
                    <table class="table table-dark mb-0">
                    <thead class="sticky-top" style="background-color: #393939; ">
                      <tr class="text-uppercase text-success ">
                        <th scope="col">Fecha</th>
                        <th scope="col">autor</th>
                        <th scope="col">comentario</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($comentarios as $comentario)
                    <tr>
                      <td>{{ $comentario["fecha_inicio"] }}</td>
                      <td>{{ $comentario["autor"] }}</td>
                      <td>{{ $comentario["texto"] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                @else
                    <p>No hay comentarios</p>
                @endif 
                </div>
              </div>
            </div>
          </div>
        </div><a href="{{route('comentario.create',['id'=>$id]) }}">
    <button  class="btn btn-primary btn-block mt-3">Crear nuevo comentario</button>
    </a>
    <a href="{{route('obra.show') }}">
    <button  class="btn btn-secondary btn-block mt-3">Volver a ver obras</button>
    </a>
      </div>
      
    </div>
  </div>
   
@endsection