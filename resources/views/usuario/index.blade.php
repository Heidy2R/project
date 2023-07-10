@extends('adminlte::page')

@section('title', 'CRUD Usuarios')

@section('content_header')
    <h1>CRUD Usuarios</h1>
@stop

@section('content')
    <?php 
        $conexion=mysqli_connect('localhost','root','','project');
    ?>
<a href="" class="btn btn-primary mb-3">New</a>

<!DOCTYPE html>
<html>
<head>
<title>Listado de Usuarios</title>
</head>
<body>
    
<br>
<table id="users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%" >
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Email Verified At</th>
            <th scope="col">Password</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>    

    <?php 
        $sql="SELECT * from users";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
     ?>
    <tbody>
            <tr>
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['name'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td><?= $mostrar['email_verified_at'] ?></td>
                <td><?= $mostrar['password'] ?></td>
                <td>
                    <form action="" method="POST">
                        <a href="" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delet</button>
                    </form>
                </td>
            </tr>
    </tbody>
    <?php 
    }
 ?>
</table>

</body>
</html>
    
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#cargos');
    </script>
@stop