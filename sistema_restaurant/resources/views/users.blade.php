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
                        <a class="nav-link" href="../../index.html">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../products/index.html">Productos</a>
                    </li>
                </ul>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"><button type="button" class="btn btn-secondary">Cerrar Sesion</button></a>
                        </li>

                    </ul>
                </div>

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
                    <tr>
                        <th scope="row">1</th>
                        <td>Kate</td>
                        <td>Moss</td>
                        <td>d6sad13as</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" disabled checked>
                                <label class="custom-control-label" for="customCheck1">Activo</label>
                            </div>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-success">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Anna</td>
                        <td>Wintour</td>
                        <td>h78gh1461g </td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" disabled checked>
                                <label class="custom-control-label" for="customCheck2">Activo</label>
                            </div>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-success">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jerry</td>
                        <td>Horwitz</td>
                        <td>454134354bdas</td>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3" disabled checked>
                                <label class="custom-control-label" for="customCheck3">Activo</label>
                            </div>
                        </td>
                        <td>
                            <form>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditar">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </form>


                        </td>
                    </tr>
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
    <!--/row-->

    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Editar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="card input-group p-4">

                            <div class="form-group">
                                <label>ID</label>
                                <input type="number" class="form-control" value="5" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" id="pass">
                            </div>
                            <div class="form-group">
                                <label for="estatus">Estado</label>
                                <select multiple class="form-control" id="esatatus">
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
                <form>
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
                                <input type="text" class="form-control" id="apellidos" name="apellidos">
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
</body></html>
