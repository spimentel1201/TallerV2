@extends('adminlte::page')

@section('title', 'Artefactos')

@section('content_header')
    <h1>Editar Artefacto</h1>
@stop

@section('content')
   <form action="/artefactos/{{$artefacto->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$artefacto->nombre}}">    
  </div>
  <a href="/artefactos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop