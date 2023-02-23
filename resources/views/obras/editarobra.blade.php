@extends('layout.header')



@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-5">Obra</h2>
    <form class="mx-auto" style="max-width: 500px;" action="{{route('obra.update',['id'=>$obra->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="Solicitante">Solicitante</label>
            <select class="form-control" id="solicitante_id" name="solicitante_id" value="{{old('solicitante_id')}}">
              <option value="{{ $unsolicitante-> id}}" hidden>{{ $unsolicitante-> nombre}}</option>
              @foreach($solicitantes as $solicitante)
                  <option value="{{ $solicitante->id }}">{{ $solicitante->nombre }}</option>
              @endforeach
            </select>
    </div>
      <div class="form-group">
      <label for="tipo_edificio">tipo_edificio</label>
      <select class="form-control" id="tipo_edificio" name="tipo_edificio" value="{{old('tipo_edificio')}}">
              <option value="{{ $obra->tipo_edificio }}" hidden>{{ $obra->tipo_edificio }}</option>
              @foreach(App\Enums\TipoEdificio::cases() as $edificio)
                  <option value="{{ $edificio->value }}">{{ $edificio->value }}</option>
              @endforeach
            </select>
      <div class="form-group ">
      <label for="tipo_obra" >tipo_obra </label>
      <select class="form-control" id="tipo_obra" name="tipo_obra" value="{{old('tipo_obra')}}">
            <option value="{{ $obra->tipo_obra }}"hidden>{{ $obra->tipo_obra }}</option>
              @foreach(App\Enums\TipoObra::cases() as $tipobra)
                  <option value="{{ $tipobra->value }}">{{ $tipobra->value }}</option>
              @endforeach
       </select>
    </div>
    <div class="form-group ">
      <label for="Direcion">Direcion </label>
      <input type="text" class="form-control" name="direcion" id="direcion" value="{{ $obra->direcion }}" >
        </div>
    <div class="form-group ">
      <label for="fechaini">Fecha inicio </label>
      <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{$obra->fecha_inicio}}">
    </div>
    <div class="form-group ">
      <label for="fechaini">Fecha fin </label>
      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{$obra->fecha_fin}}">
    </div>
      <div class="form-group">
    <label for="inputAddress">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="descripcion" value="{{ $obra->descripcion }}" rows="3">{{ $obra->descripcion }}</textarea>
  </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Editar Obra</button>
     <a role="button" aria-pressed="true" href="{{ URL::previous() }}"class="btn btn-secondary btn-block mt-3">Volver</a> 
    </form>
    
   
   
@endsection