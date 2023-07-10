@extends('adminlte::page')

@section('title', 'CRUD Roles')

@section('content_header')
    <h1>CRUD Roles</h1>
@stop

@section('content')
<a href="cargos/create" class="btn btn-primary mb-3">New</a>

<table id="cargos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rol</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cargos as $cargo)
            <tr>
                <td>{{$cargo->id}}</td>
                <td>{{$cargo->usuario}}</td>
                <td>{{$cargo->rol}}</td>
                <td>{{$cargo->estado}}</td>
                <td>
                    <form action="{{route('cargos.destroy',$cargo->id)}}" method="POST">
                        <a href="/cargos/{{$cargo->id}}/edit" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href = "https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#cargos');
    </script>
@stop