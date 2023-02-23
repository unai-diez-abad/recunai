@extends('layout.header')



@section("content")
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">Obras</div>
      <div class="card-body">
        <h5 class="card-title">Nueva Obra</h5>
        <p class="card-text">aqui podras crear una nueva obra.</p>
        <a href="{{ route('obra.create') }}" class="float-right btn btn-outline-success btn-lg" role="button" aria-pressed="true">crear obra</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">Obras</div>
      <div class="card-body">
        <h5 class="card-title">Ver obras</h5>
        <p class="card-text">aqui podras ver todas las obras</p>
        <a href="{{ route('obra.show') }}" class="float-right btn btn-outline-success btn-lg" role="button" aria-pressed="true">ver obras</a>
      </div>
    </div>
  </div>
</div>
 
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">Solicitantes</div>
      <div class="card-body">
        <h5 class="card-title">Nuevo Solicitante</h5>
        <p class="card-text">Aqui podras crear el nuevo solicitante.</p>
        <a href="{{ route('solicitante.create') }}" class="float-right btn btn-outline-success btn-lg" role="button" aria-pressed="true">crear solicitante</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">Solicitantes</div>
      <div class="card-body">
        <h5 class="card-title">Ver Solicitante</h5>
        <p class="card-text">aqui podras ver todos los solicitantes</p>
        <a href="{{ route('solicitante.show') }}" class="float-right btn btn-outline-success btn-lg" role="button" aria-pressed="true">Ver Solicitantes</a>
      </div>
    </div>
  </div>
</div>

@endsection

@section("script")
<script>
  
</script>
@endsection