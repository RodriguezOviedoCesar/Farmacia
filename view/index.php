<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../others/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../others/icons/css/all.css">
    <style>
    
        #contenedor {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        
        #contenedor1 {
            width: 90%;
        }
        
        #cajitas {
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin-top: 25px;
            justify-content: center;
        }

    </style>
</head>

<body style=" background-color: #ccc; ">
    <div id="contenidoca " class="navbar navbar-dark bg-dark ">
        <div id="contenidocab" style="width:100%">
            <header id="header " style="display: flex;flex-direction:row; align-items:center; justify-content:space-around">
                <div id="imagen " style="display: flex;flex-direction:row">
                    <img style="margin-left: 15px;width: 160px; height: 65px; " src="../others/img/logo.png ">
                    <p style="color: white; margin-left: 15px; font-size: 35px; font-style: italic; ">Bienvenido</p>
                </div>
                <div>
                <a href="../index.php">
                            <button class="btn btn-danger" type="button">
                                <span>Salir
                                    <i class="fas fa-arrow-circle-left"></i>
                                    <?php
                                        require '../model/conexion.php';

                                        $mysqli->close();
                                    ?>
                                </span>
                            </button>
                        </a>
                </div>
            </header>
        </div>
    </div>

    <div id="contenedor" style="margin-bottom: 50px;">
        <div id="contenedor1">
            <div id="cajitas">
                <div class="card" style="width: 18rem; flex-basis: 28%; margin: 15px;">
                    <img src="../others/img/doctor.png" class="card-img-top img-fluid" alt="... " style="height: 250px; width: 250px; margin: 0 auto; margin-top:15px">
                    <div class="card-body ">
                        <h5 class="card-title ">Doctores</h5>
                        <p class="card-text ">Mostrar lista de Docotres disponibles</p>
                        <a href="../view/doctores.php " class="btn btn-dark ">Ir a Doctores</a>
                    </div>
                </div>
                <div class="card " style="width: 18rem; flex-basis: 28%;margin: 15px; ">
                    <img src="../others/img/Productos.png" class="card-img-top img-fluid " alt="... " style="height: 250px; width: 250px; margin: 0 auto; margin-top:15px">
                    <div class="card-body ">
                        <h5 class="card-title ">Productos</h5>
                        <p class="card-text ">Mostar la lista de productos disponibles en Stock</p>
                        <a href="../view/producto.php" class="btn btn-dark ">Ir a productos</a>
                    </div>
                </div>
                <div class="card " style="width: 18rem;  flex-basis: 28%;margin: 15px;">
                    <img src="../others/img/user.png" class="card-img-top img-fluid" alt="... " style="height: 250px; width: 250px; margin: 0 auto; margin-top:15px">
                    <div class="card-body ">
                        <h5 class="card-title ">Clientes</h5>
                        <p class="card-text ">Mostrar lista de clientes registrados</p>
                        <a href="../view/clientes.php" class="btn btn-dark ">Ir a clientes</a>
                    </div>
                </div>
                <div class="card " style="width: 18rem; flex-basis: 28%;margin: 15px;">
                    <img src="../others/img/trabajador.png" class="card-img-top img-fluid " alt="... " style="height: 250px; width: 250px; margin: 0 auto; margin-top:15px">
                    <div class="card-body ">
                        <h5 class="card-title ">Trabajadores</h5>
                        <p class="card-text ">Mostar lista de trabajodores en Farmacia</p>
                        <a href="../view/empleado.php" class="btn btn-dark ">Ir a trabajadores</a>
                    </div>
                </div>
                <div class="card " style="width: 18rem;flex-basis: 28%; margin: 15px;">
                    <img src="../others/img/pedido.png" class="card-img-top img-fluid" alt="... " style="height: 250px; width: 250px; margin: 0 auto; margin-top:15px">
                    <div class="card-body ">
                        <h5 class="card-title ">Pedidos</h5>
                        <p class="card-text ">Mostar lista de Pedidos</p>
                        <a href="../view/pedidos.php" class="btn btn-dark ">Ir a Pedidos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

<head>
    <script type="text/javascript " src="../others/bootstrap/jquery-3.5.1.min.js "></script>
    <script type="text/javascript " src="../others/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript " src="../others/icons/js/all.js "></script>
</head>

</html>