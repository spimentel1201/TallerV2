@extends('adminlte::page')

@section('title', 'Artefactos')

@section('content_header')
    <h1>Artefactos</h1>
@stop

@section('content')
<p>Bienvenido al panel de administración de Artefactos.</p>
<a href="artefactos/create" class="btn btn-primary mb-3">CREAR</a>
<table id="artefactos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artefactos as $artefacto)
        <tr>
            <td>{{ $artefacto->id}}</td>
            <td>{{$artefacto->nombre}}</td>
            <td>
                <form action="{{ route ('artefactos.destroy',$artefacto->id)}}" method="POST">
                <a href="/artefactos/{{ $artefacto->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
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
    $(document).ready(function() {
        $('#artefactos').DataTable({
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    } );
    </script>
@stop