@extends('adminlte::page')

@section('title', 'Guias')

@section('content_header')
    <h1>Crear Guia</h1>
@stop

@section('content')
<form action="/guias" method="POST">
<div class="col-md-6">
  <div class="row">
  <h4 class="register-heading">Datos del Cliente</h4>
  </div>
</div>
  @csrf
  <div class="row">
  <div class="col-md-2">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="col-md-3">
    <label for="" class="form-label">Nombres</label>
    <input id="nombresC" name="nombresC" type="text" class="form-control" tabindex="2" required>    
  </div>
  <div class="col-sm-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellidosC" name="apellidosC" type="text" class="form-control" tabindex="3" required>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-2">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="4" placeholder="Ej: 968952422">
  </div>
  <div class="col-sm-2">
    <label for="" class="form-label">DNI</label>
    <input id="dni" name="dni" type="text" class="form-control" tabindex="5" placeholder="Ej. 14527845">
  </div>
  <div class="col-sm-4">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="6" placeholder="Ej. Calle SN 515">
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
                                                <select id="artefacto" name="artefacto" class="form-control" taboindex="7">
                                                    <option selected>Seleccione Artefacto...</option>
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
    <input id="marca" name="marca" type="text" class="form-control" tabindex="8" >
  </div>
  <div class="col-md-2">
    <label for="" class="form-label">Modelo</label>
    <input id="modelo" name="modelo" type="text" class="form-control" tabindex="9" >
  </div>
  <div class="col-md-4">
    <label for="" class="form-label">Serie</label>
    <input id="serie" name="serie" type="text" class="form-control" tabindex="10">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-4">
    <label for="" class="form-label">Accesorios</label>
    <textarea id="accesorios" name="accesorios" type="text" class="form-control" tabindex="11" rows="3"></textarea>
  </div>
  <div class="col-sm-4">
    <label for="" class="form-label">Descripcion</label>
    <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="12" rows="3"></textarea>
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
                                                    <option selected>Seleccione Estado...</option>
                                                    <option value = "En revision">En Revision</option>
                                                    <option value = "Reparado">Reparado</option>
                                                    <option value = "Entregado">Entregado</option>
                                                    <option value = "Vendido">Vendido</option>
                                                </select>
                                            </div>
                                        </div>
  <div class="col-sm-2">
    <label for="" class="form-label">Monto</label>
    <input id="monto" name="monto" type="number" step="any" class="form-control" tabindex="13" placeholder="150">
  </div>
    <div class="col-sm-3">
    <label for="" class="form-label">Fecha Ingreso</label>
    <input id="fecha_ing" name="fecha_ing" type="date" class="form-control" tabindex="14">
    </div>
  </div>
  <br>
  <a href="/guias" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

<br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
@stop