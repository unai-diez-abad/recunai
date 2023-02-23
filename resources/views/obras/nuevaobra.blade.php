@extends('layout.header')



@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-5">Nueva obra</h2>
    <!-- Control de errores -->
    @if ($errors->any())
    <div class="alert alert-danger mx-auto"style="max-width: 500px;">
    <h3>Todos los campos son obligatorios</h3>
     </div>
    @endif
    <form class="mx-auto" style="max-width: 500px;" action="{{route('obra.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="Solicitante">Solicitante</label>
            <select class="form-control" id="solicitante_id" name="solicitante_id" value="{{old('solicitante_id')}}">
              <option value="null" hidden>seleccionar Solicitante</option>
              @foreach($solicitantes as $solicitante)
                  <option value="{{ $solicitante->id }}">{{ $solicitante->nombre }}</option>
              @endforeach
            </select>
    </div>
      <div class="form-group">
      <label for="tipo_edificio">tipo_edificio</label>
      <select class="form-control" id="tipo_edificio" name="tipo_edificio" value="{{old('tipo_edificio')}}">
              <option value="null" hidden>seleccionar tipo_edificio</option>
              @foreach(App\Enums\TipoEdificio::cases() as $edificio)
                  <option value="{{ $edificio->value }}">{{ $edificio->value }}</option>
              @endforeach
            </select>
      <div class="form-group ">
      <label for="tipo_obra" >tipo_obra </label>
      <select class="form-control" id="tipo_obra" name="tipo_obra" value="{{old('tipo_obra')}}">
            <option value="null"hidden>seleccionar tipo_obra</option>
              @foreach(App\Enums\TipoObra::cases() as $tipobra)
                  <option value="{{ $tipobra->value }}">{{ $tipobra->value }}</option>
              @endforeach
       </select>
    </div>
    <div class="form-group ">
      <label for="Direcion">Direcion </label>
      <input type="text" class="form-control" name="direcion" id="direcion" value="{{ old('direcion') }}" >
        </div>
    <div class="form-group ">
      <label for="fechaini">Fecha inicio </label>
      <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{old('fecha_inicio')}}">
    </div>
    <div class="form-group ">
      <label for="fechaini">Fecha fin</label>
      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{old('fecha_fin')}}">
    </div>
      <div class="form-group">
    <label for="inputAddress">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="descripcion"value="{{ old('descripcion') }}" rows="3"></textarea>
  </div>
  <!-- boton de crear -->
      <button type="submit" class="btn btn-primary btn-block mt-3">incluir nueva obra</button>
      <!-- boton de volver -->
    <a role="button" aria-pressed="true" href="{{ URL::previous() }}"class="btn btn-secondary btn-block mt-3">Volver</a>
    </form>
    
@endsection
