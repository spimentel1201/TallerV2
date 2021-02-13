@extends('adminlte::page')

@section('title', 'Guias')

@section('content_header')
    <h1>Guias</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administración de Guias o Recibos.</p>

    <nav class="navbar navbar-light float-right">
        <form class="form-inline">
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por Nombre" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <a href="guias/create" class="btn btn-primary mb-3">CREAR</a>
<table id="guias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Artefacto</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guias as $guia)
        <tr>
            <td>{{ $guia->id}}</td>
            <td>{{$guia->nombresC}}</td>
            <td>{{$guia->apellidosC}}</td>
            <td>{{$guia->telefono}}</td>
            <td>{{$guia->artefacto}}</td>
            <td>{{$guia->marca}}</td>
            <td>{{$guia->modelo}}</td>
            <td>{{$guia->descripcion}}</td>
            <td>{{$guia->fecha_ing->format('d-m-Y')}}</td>
            <td>
                <form action="{{ route ('guias.destroy',$guia->id)}}" method="POST">
                <!--<a href="/guias/{{ $guia->id}}/show" class="btn btn-success btn-sm">Ver</a>-->
                <a href="/guias/{{ $guia->id}}/show" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Ver</a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                <a href="/guias/{{ $guia->id}}/edit" class="btn btn-info btn-sm">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script>
    
@stop