@extends('layout.header')



@section("content")


<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
          <h2 class="col text-center mb-4">Lista de todas las obras</h2>
            <div class="card ">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true" style="position: relative;max-height:500px; ">

                    @if(count($obras) != 0)
                    <table class="table table-dark mb-0">
                    <thead class="sticky-top" style="background-color: #393939; ">
                      <tr class="text-uppercase text-success ">
                        <th  class="text-center">solicitante</th>
                        <th  class="text-center">tipo_edificio</th>
                        <th  class="text-center">tipo_obra</th>
                        <th  class="text-center">fecha_inicio</th>
                        <th  class="text-center">fecha_fin</th>
                        <th  class="text-center">mas</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                    @foreach($obras as $obra)
                        <tr>
                        <td  class="text-center">{{ $obra["solicitante"] }}</td>
                        <td  class="text-center">{{ $obra["edificio"] }}</td>
                        <td  class="text-center">{{ $obra["obra"] }}</td>
                        <td  class="text-center">{{ $obra["fecha_inicio"] }}</td>
                        <td  class="text-center">{{ $obra["fecha_fin"] }}</td>
                        <td  class="text-center">
                            <a href="{{route('obra.edit',['id'=>$obra['id']]) }}">
                            <button  class="btn btn-outline-warning">Ver/Editar obra</button>
                            </a>
                            <a  class="float-right" href="{{route('comentario.show',['id'=>$obra['id']]) }}">
                            <button  class="btn btn-outline-primary">Ver Comentario</button>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                @else
                 <p>No hay comentarios</p>
                @endif 
                  </table>
                </div>
              </div>

            </div>
            <div class=" col text-center mt-4">
            <a href="{{ route('obra.create') }}" class="float-right btn btn-outline-primary btn-lg" role="button" aria-pressed="true">crear obra</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
   
@endsection