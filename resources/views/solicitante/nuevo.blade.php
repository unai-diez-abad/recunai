@extends('layout.header')



@section("content")

<div class="container mt-5">
    <h2 class="text-center mb-5">Nuevo solicitante</h2>
    <!-- Control de errores -->
    @if ($errors->any())
    <div class=" alert alert-danger mx-auto"style="max-width: 500px;">
    <h3>Todos los campos son obligatorios</h3>
    </div>
    @endif
    <form class="mx-auto" style="max-width: 500px;" action="{{route('solicitante.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group ">
      <label for="Direcion">Nombre </label>
      <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" >
        </div>
        <div class="form-group ">
      <label for="Direcion">Apellidos </label>
      <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos') }}" >
        </div>
        <div class="form-group ">
      <label for="Direcion">DNI </label>
      <input type="text" class="form-control" name="DNI" id="DNI" value="{{ old('DNI') }}" >
        </div>
        <div class="form-group ">
      <label for="Direcion">direcion de residencia </label>
      <input type="text" class="form-control" name="direcion_residencia" id="direcion_residencia" value="{{ old('direcion_residencia') }}" >
        </div>
        <div class="form-group ">
      <label for="Direcion">Correo </label>
      <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" >
        </div>
    <div class="form-group ">
      <label for="fechaini">telefono </label>
      <input type="number" class="form-control" id="tel" name="tel" value="{{old('tel')}}">
    </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">incluir nuevo solicitante</button>
    <a role="button" aria-pressed="true" href="{{ URL::previous() }}"class="btn btn-secondary btn-block mt-3">Volver</a>
    </form>
@endsection
