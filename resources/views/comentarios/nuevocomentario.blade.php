@extends('layout.header')



@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-5">Nuevo comentario de la obra </h2>
    <!-- Control de errores -->
    @if ($errors->any())
    <div class="alert alert-Error">
    <h3>Todos los campos son obligatorios</h3>
     </div>
    @endif
    <form class="mx-auto" style="max-width: 500px;" action="{{route('comentario.store',['id'=>$id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden"  name="usuario_id" id="usuario_id" value="{{auth()->guard('usuario')->user()->id}}" >
    <input type="hidden"  name="obra_id" id="obra_id" value="{{ $id }}" >
    <div class="form-group ">
      <label for="fechaini">Fecha comentario </label>
      <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}">
    </div>
      <div class="form-group">
    <label for="inputAddress">texto</label>
    <textarea class="form-control" name="texto" id="texto" value="{{ old('texto') }}" rows="3"></textarea>
  </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Crear comentario</button>
      <a role="button" aria-pressed="true" href="{{ URL::previous() }}"class="btn btn-secondary btn-block mt-3">Volver</a>
    </form>
    
@endsection
