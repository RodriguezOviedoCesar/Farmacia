<?php

require('../model/conexion.php');

$errors = array(); /* Almacena errores */

$flag = 0; /* Almacena un valor binario */

if (isset($_GET['idempleado'])) {
    $idemp = $mysqli->real_escape_string($_GET['idempleado']);
    if (!empty($idemp)) {
        $sql = "SELECT * FROM empleado WHERE idempleado = $idemp";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            $flag = 1;
            $datos = $result->fetch_assoc();
        } else {
            $errors[] = "No hay ningun empelado con ese registro";
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
                <h1>Modificar datos de <?php echo $datos['nombres']?></h1>
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
             <form action="../model/modificar.php" method="POST">
                    ESTADO :  <select name="idtipoestado" class="form-select" aria-label="Default select example" required>
                    <?php
                                            if($datos['idtipoestado'] == 1){
                                        ?>
                                            <option select value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                        <?php
                                            }else{
                                        ?>
                                            <option select value="2">Inactivo</option>
                                            <option value="1">Activo</option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                    CARGO :  <select name="idcargoempleado" class="form-select" aria-label="Default select example" required>
                                        <?php
                                            if($datos['idcargoempleado'] == 1){
                                        ?>
                                            <option select value="1">Administrador</option>
                                            <option value="2">Tesorero</option>
                                        <?php
                                            }else{
                                        ?>
                                            <option select value="2">Tesorero</option>
                                            <option value="1">Administrador</option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                    DNI: <input value="<?php echo $datos['dni']?>" type="text" name="dni" placeholder="DNI" class="form-control" id="validationDefault01" required>
                    NOMBRES: <input value="<?php echo $datos['nombres']?>" type="text" name="names" placeholder="Nombre" class="form-control" id="validationDefault01" required>
                    DIRECCION: <input value="<?php echo $datos['direccion']?>" type="text" name="direccion" placeholder="Direccion" class="form-control" id="validationDefault01" required>
                    TELEFONO: <input value="<?php echo $datos['telefono']?>" type="text" name = "telefono" class="form-control" id="exampleFormControlInput1" placeholder="telefono" require>
                    <input type="hidden" name="miID" value="<?php echo $datos['idempleado']?>">
                    <div id="botones">
                    <input type="submit" value="Modificar" name="enviarem" class="btn btn-success">

                    <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>               
            <?php
                }
                ?>

            <div id="regresar">
                <a href="../view/empleado.php">
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