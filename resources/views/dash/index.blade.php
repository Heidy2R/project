@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <p>El proyecto se comforma de los siguientes componentes:</p>
    <p>- Login</p>
    <p>- Register</p>
    <p>- Verificación de email</p>
    <p>- Dashboard</p>
    <p>- CRUD de Roles</p>
    <p>- CRUD de Usuarios</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop