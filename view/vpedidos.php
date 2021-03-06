<?php

require('../model/conexion.php');

$errors = array(); /* Almacena errores */

$flag = 0; /* Almacena un valor binario */

if (isset($_GET['nropedido'])) {
    $nrope = $mysqli->real_escape_string($_GET['nropedido']);
    if (!empty($nrope)) {
        $sql = "SELECT p.nropedido, p.fechapedido, p.montototal, c.nombres as names, e.nombres
                FROM pedido p, cliente c, empleado e
                WHERE p.idcliente = c.idcliente and p.idempleado = e.idempleado";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            $flag = 1;
            $datos = $result->fetch_assoc();
        } else {
            $errors[] = "No hay ningun doctor con ese registro";
        }
    } else {
        $errors[] = "No se encontro ningun doctor con ese ID";
    }
} else {
    $errors[] = "No estas enviando ningun id";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../others/icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="../others/css/insertarcliente.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <style>
        #contenedor{
            width: 100%;
            display: flex;
            justify-content: center;       
        }

        #contenedor1{
            width: 40%;
            margin-top: 55px;
            padding: 15px;
        }
        #title{
            display: flex;
            justify-content: center;
            padding: 25px;
        }
        #formulario{
            padding-left: 55px;
            padding-right: 55px;
        }

        #botones{
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
        }

        #regresar{
            display: flex;
            justify-content: center;
            margin: 15px;
        }
    </style>
</head>

<body>
    <div id="contenedor">
        <div id="contenedor1" class="shadow p-3 mb-5 bg-body rounded">
            <div id="title">
                <h1>DETALLE DE PEDIDO <?php echo $datos['nropedido']?></h1>
            </div>
            <?php
                
                if(count($errors)>0){
                    echo "<div class='error'>";
                    foreach($errors as $error){
                        echo $error;
                    }
                    echo "</div>";
                }
                
                if($flag == 1){
                ?>
            <div id="formulario">
                <form action="../model/modificar.php" method="POST">
                    NUMERO PEDIDO: <input type="text" name="names" value="<?php echo $datos['nropedido']?>" class="form-control" id="validationDefault01" disabled>
                    FECHA PEDIDO: <input type="text" name="direc" value="<?php echo $datos['fechapedido']?>" class="form-control" id="validationDefault01" disabled>
                    MONTO: <input type="text" name="tel" value="<?php echo $datos['montototal']?>" class="form-control" id="validationDefault01" disabled>
                    NOMBRE CLIENTE: <input type="email" name = "email" value="<?php echo $datos['names']?>" class="form-control" id="exampleFormControlInput1" disabled>
                    NOMBRE VENDEDOR: <input type="text" name="nrodocumento" value="<?php echo $datos['nombres']?>" class="form-control" id="validationDefault01" disabled>
                </form>
            </div>                
            <?php
                }
                ?>

            <div id="regresar">
                <a href="../view/pedidos.php">
                    <button class="btn btn-info">
                        <span>Regresar
                            <i class="fas fa-undo"></i>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

<head>
    <script type="text/javascript" src="../others/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../others/icons/js/all.js"></script>
    <script type="text/javascript" src="../others/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var height = $(window).height();

            $('#contenedor').height(height);
        });
    </script>

</head>

</html>