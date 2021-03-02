<?php

require('../model/conexion.php');

$errors = array(); /* Almacena errores */

$flag = 0; /* Almacena un valor binario */

if (isset($_GET['iddoctor'])) {
    $id_doc = $mysqli->real_escape_string($_GET['iddoctor']);
    if (!empty($id_doc)) {
        $sql = "SELECT * FROM doctor WHERE iddoctor = $id_doc";
        $result = $mysqli->query($sql   );
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
    <link rel="stylesheet" type="text/css" href="../others/css/insertardoctor.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div id="contenedor">
        <div id="contenedor1">
            <div id="title">
                <h1>Registro de Doctores</h1>
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
                <form action="<?php //echo $_SERVER['PHP_SELF'] 
                                ?>" method="POST">
                    NOMBRES: <input type="text" name="names" placeholder="Nombres de doctores" class="form-control" id="validationDefault01" value="<?php echo $datos['Nombre']?>" required>
                    ESPECIALIDAD: <input type="text" name="espe" placeholder="Especialidad del doctor" class="form-control" id="validationDefault01" value="<?php echo $datos['Especialidad']?>" required>
                    NRO. COLEGIADO: <input type="text" name="num" placeholder="Nro de Colegiado" class="form-control" id="validationDefault01" value="<?php echo $datos['ncolegiado']?>" required>
                    CARGO: <input type="text" name="cargo" placeholder="Cargo que desarrolla" class="form-control" id="validationDefault01" value="<?php echo $datos['Cargo']?>" required>
                    <input type="hidden" name="miID" value="value="<?php echo $datos['iddoctor']?>"">
                    <div id="botones">
                        <input type="submit" value="Enviar" name="enviare" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Registrado Correctamente
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
                <?php
                }
                ?>
            <div id="regresar">
                <a href="../view/doctores.php">
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