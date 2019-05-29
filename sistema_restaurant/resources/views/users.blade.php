<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style important -->
    <link rel="stylesheet" href="css/style.css">

    <title>Usuarios - Tacos World</title>

</head>

<body>
    <div class="clearfix">...</div>
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Restaurant</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('comandasProductos') }}">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('usuarios') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('productos') }}">Productos</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /navbar -->
    </header>
    <!-- /modal -->

    <!--row-->
    <div class="row text-center mt-5">
        <div class="table-responsive m-5">
            <h5 class="h5">USUARIOS</h5>
            <!--Table-->
            <table class="table table-striped table-hover table-dark">

                <!--Table head-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Contraseña</th>
                        <th>Estatus</th>
                        <th>Herramientas</th>

                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <td>{{$usuario->usuario}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->apellido}}</td>
                        <td>{{$usuario->contrasena}}</td>
                        <td>
                            <?php
                            if ($usuario->status == 0) {
                                echo "<div class='custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input' id='customCheck3' disabled>
                                <label class='custom-control-label' for='customCheck3'>Activo</label>
                            </div>";
                            } else if ($usuario->status == 1) {
                                echo "<div class='custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input' id='customCheck3' checked disabled>
                                <label class='custom-control-label' for='customCheck3'>Inactivo</label>
                            </div>";
                            }

                            ?>

                        </td>
                        <td>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditar{{$usuario->id}}">Editar</button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalEditar{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditar{{$usuario->id}}Titulo" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Editar usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            {{ method_field('PATCH')}}
                                            <div class="modal-body">
                                                <div class="card input-group p-4">

                                                    <div class="form-group">
                                                        <label>ID</label>
                                                        <input type="number" class="form-control" value="{{$usuario->id}}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre">Usuario</label>
                                                        <input type="text" class="form-control" value="{{$usuario->usuario}}" id="usuario" name="usuario">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" value="{{$usuario->nombre}}" id="nombre" name="nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidos">Apellidos</label>
                                                        <input type="text" class="form-control" value="{{$usuario->apellido}}" id="apellido" name="apellido">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass">Contraseña</label>
                                                        <input type="password" class="form-control" value="{{$usuario->contrasena}}" id="contrasena" name="contrasena">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estatus">Estado</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="1">Activo</option>
                                                            <option value="0">No activo</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <form method="post" action="{{ url('/usuarios/'.$usuario->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Realmente desea eliminar este registro?');" class="btn btn-danger">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
    <!--/row-->

    <center><button class="btn btn-dark" data-toggle="modal" data-target="#modalNuevoUsuario">Nuevo usuario</button></center>

    <!-- Modal -->
    <div class="modal fade" id="modalNuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="modalNuevoUsuarioTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/usuarios')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="card input-group p-4">

                            <div class="form-group">
                                <label for="nombre">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class="form-group">
                                <label for="pass">Cotnraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena">
                            </div>
                            <div class="form-group">
                                <label for="estatus">Estado</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1">Disponible</option>
                                    <option value="0">No disponible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>