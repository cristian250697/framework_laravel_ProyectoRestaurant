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

    <title>Productos - Tacos World</title>

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
            <h5>PRODUCTOS</h5>
            <!--Table-->
            <table class="shadow table table-striped table-hover table-dark">

                <!--Table head-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Status</th>
                        <th>Tipo</th>
                        <th>Imagen</th>
                        <th>Herramientas</th>

                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{$producto->id}}</th>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>${{$producto->precio}}</td>
                        <td>
                            <?php
                            if ($producto->status == 0) {
                                echo "<div class='custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input' id='customCheck3' disabled>
                                <label class='custom-control-label' for='customCheck3'>Disponible</label>
                            </div>";
                            } else if ($producto->status == 1) {
                                echo "<div class='custom-control custom-checkbox'>
                                <input type='checkbox' class='custom-control-input' id='customCheck3' checked disabled>
                                <label class='custom-control-label' for='customCheck3'>Disponible</label>
                            </div>";
                            }

                            ?>

                        </td>
                        <td>
                            <?php
                            if ($producto->tipo == 0) {
                                echo "Platillo";
                            } else if ($producto->tipo == 1) {
                                echo "Bebida";
                            } else if ($producto->tipo == 2) {
                                echo "Postre";
                            }
                            ?>
                        </td>
                        <td>
                            <img src="{{ asset('storage'). '/'.$producto->imagen}}" width="100">

                        </td>
                        <!-- <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3">Disponible</label>
                            </div>
                        </td> -->
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditar{{$producto->id}}">Editar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="modalEditar{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditar{{$producto->id}}Titulo" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Editar producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('/productos/'.$producto->id) }}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            {{ method_field('PATCH')}}
                                            <div class="modal-body">
                                                <div class="card input-group p-4">

                                                    <div class="form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidos">Descripción</label>
                                                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass">Precio</label>
                                                        <input type="number" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estatus">Estado</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="1">Disponible</option>
                                                            <option value="0">No disponible</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estatus">Tipo</label>
                                                        <select class="form-control" id="tipo" name="tipo">
                                                            <option value="0">Platillo</option>
                                                            <option value="1">Bebida</option>
                                                            <option value="2">Postre</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass">Imagen</label>
                                                        <input type="file" class="form-control" id="imagen" name="imagen">
                                                    </div>
                                                    <img src="{{ asset('storage'). '/'.$producto->imagen}}" width="100">

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
                            <!-- Modal -->
                            <form method="post" action="{{ url('/productos/'.$producto->id) }}">
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



    <center><button class="btn btn-success" data-toggle="modal" data-target="#modalNuevoProducto">Nuevo producto</button></center>

    <!-- Modal -->
    <div class="modal fade" id="modalNuevoProducto" tabindex="-1" role="dialog" aria-labelledby="modalNuevoProductoTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/productos')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="card input-group p-4">

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="pass">Precio</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>
                            <div class="form-group">
                                <label for="estatus">Estado</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1">Disponible</option>
                                    <option value="0">No disponible</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="estatus">Tipo</label>
                                <select class="form-control" id="tipo" name="tipo">
                                    <option value="0">Platillo</option>
                                    <option value="1">Bebida</option>
                                    <option value="2">Postre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pass">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
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
    <!-- Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>