@extends('adminlte::page')

@section('title', 'Edición de Guias')

@section('content_header')
    <h1>Editar Guía</h1>
@stop

@section('content')
   <form action="/guias/{{$guia->id}}" method="POST">
   <div class="col-md-6">
  <div class="row">
  <h4 class="register-heading">Datos del Cliente</h4>
  </div>
</div>    
   @csrf
   @method('PUT')
   <div class="row">
  <div class="col-md-4">
    <label for="" class="form-label">Nombres</label>
    <input id="nombresC" name="nombresC" type="text" class="form-control" tabindex="1" value="{{$guia->nombresC}}">    
  </div>
  <div class="col-sm-4">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellidosC" name="apellidosC" type="text" class="form-control" tabindex="2" value="{{$guia->apellidosC}}">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-2">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" value="{{$guia->telefono}}">
  </div>
  <div class="col-sm-2">
    <label for="" class="form-label">DNI</label>
    <input id="dni" name="dni" type="text" class="form-control" tabindex="4" value="{{$guia->dni}}">
  </div>
  <div class="col-sm-4">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="5" value="{{$guia->direccion}}">
  </div>
  </div>
  <div class="row">
  <h4 class="register-heading">Datos del Artefacto</h4>
  </div>
</div>
  <div class="col-sm-3">
  <label for="" class="form-label">Artefacto</label>
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                                </div>
                                                <select id="artefacto" name="artefacto" class="form-control" taboindex="6" disabled="true">
                                                    <option selected value="{{$guia->artefacto}}">{{$guia->artefacto}}</option>
                                                    @foreach($artefacto as $artefactoitem)
                                                    <option value = "{{$artefactoitem->nombre}}">{{$artefactoitem->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
  <br>
  <div class="row">
  <div class="col-md-2">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" tabindex="7" value="{{$guia->marca}}" disabled="true">
  </div>
  <div class="col-md-2">
    <label for="" class="form-label">Modelo</label>
    <input id="modelo" name="modelo" type="text" class="form-control" tabindex="8" value="{{$guia->modelo}}" disabled="true">
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Serie</label>
    <input id="serie" name="serie" type="text" class="form-control" tabindex="9" value="{{$guia->serie}}">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-4">
    <label for="" class="form-label">Accesorios</label>
    <textarea id="accesorios" name="accesorios" type="text" class="form-control" tabindex="10" rows="3" disabled="true">{{$guia->accesorios}}</textarea>
  </div>
  <div class="col-sm-4">
    <label for="" class="form-label">Descripcion</label>
    <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="11" rows="3" disabled="true">{{$guia->descripcion}}</textarea>
  </div>
  </div>
  <h3 class="register-heading">Otros datos</h3>
  <div class="row">
  <div class="col-sm-3">
  <label for="" class="form-label">Estado</label>
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                                </div>
                                                <select id="estado" name="estado" class="form-control" taboindex="6">
                                                  <option selected value="{{$guia->estado}}">{{$guia->estado}}</option>
                                                    <option value = "En revisión">En Revisión</option>
                                                    <option value = "Reparado">Reparado</option>
                                                    <option value = "Entregado">Entregado</option>
                                                </select>
                                            </div>
                                        </div>
  <div class="col-sm-2">
    <label for="" class="form-label">Monto</label>
    <input id="monto" name="monto" type="number" step="any" class="form-control" tabindex="12" value="{{$guia->monto}}">
  </div>
    <div class="col-sm-3">
    <label for="" class="form-label">Fecha Ingreso</label>
    <input id="fecha_ing" name="fecha_ing" type="text" class="form-control" tabindex="13" value="{{$guia->fecha_ing}}" disabled="true">
    </div>
  </div>
  <br>
  <a href="/guias" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

<br>

   <!--
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombresC" name="nombresC" type="text" class="form-control" value="{{$guia->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellidosC" name="apellidosC" type="text" class="form-control" value="{{$guia->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">DNI</label>
    <input id="dni" name="dni" type="text" class="form-control" value="{{$guia->dni}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$guia->telefono}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$guia->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Artefacto</label>
    <input id="artefacto" name="artefacto" type="text" class="form-control" value="{{$guia->artefacto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$guia->marca}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modelo</label>
    <input id="modelo" name="modelo" type="text" class="form-control" value="{{$guia->modelo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Serie</label>
    <input id="serie" name="serie" type="text" class="form-control" value="{{$guia->serie}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Accesorios</label>
    <input id="accesorios" name="accesorios" type="text" class="form-control" value="{{$guia->accesorios}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$guia->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Ingreso</label>
    <input id="fecha_ing" name="fecha_ing" type="text" class="form-control" value="{{$guia->fecha_ing}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Monto</label>
    <input id="monto" name="monto" type="number" step="any" class="form-control" value="{{$guia->monto}}">
  </div>
  <a href="/guias" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>-->
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop