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

    <title>Pedidos - Tacos World</title>

</head>

<body onload="setInterval('location.reload()',3000)">
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
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="SesionBtn" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body text-center">

                        <h6>Usuario</h6>
                        <input type="text" name="usuario">
                        <h6 class="mt-3">Contraseña</h6>
                        <input type="password" name="usuario">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /modal -->


    <!--row-->
    <div class="row text-center mt-5">
        <?php $contador = 0 ?>
        @foreach($comandas as $comanda)

        <div class="col-md-5 col-sm-12 col-lg-4 col-xl-3">
            <div class="card text-white bg-secondary mb-3" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Mesero: {{$comanda->nombre}} {{$comanda->apellido}}</h5>
                    <!-- <p class="card-text">Descripción del pedido (Platillo sin cebolla)</p> -->
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Producto: {{$comanda->nombre_producto}}</li>
                    <li class="list-group-item">Descripcion: {{$comanda->descripcion}}</li>
                    <li class="list-group-item">Mesa: {{$comanda->mesa}}</li>
                </ul>
                <div class="card-body">
                    <img src="{{ asset('storage'). '/'.$comanda->imagen}}" width="100">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--/row-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>