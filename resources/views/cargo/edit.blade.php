@extends('adminlte::page')

@section('title', 'CRUD Roles')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
<form action="/cargos/{{$cargo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input id="usuario" name="usuario" type="text" class="form-control" value="{{$cargo->usuario}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Rol</label>
        <input id="rol" name="rol" type="text" class="form-control" value="{{$cargo->rol}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" value="{{$cargo->estado}}">
    </div>
    <a href="/cargos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop