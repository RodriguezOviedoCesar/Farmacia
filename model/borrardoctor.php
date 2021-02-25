<?php

require '../model/conexion.php';

$errors = array();

if(isset($_GET['iddoctor'])){
    $id = $_GET['iddoctor'];
    if(empty($id)){
        $errors[] = "No se detecto ningun dato proviniente de la pagina anterior";
    }else{
        $sql = "DELETE FROM doctor WHERE iddoctor = $id";
        $result = $mysqli->query($sql);
    }
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
</head>
<body>
                <a href="../view/doctores.php">
                    <button class="btn btn-primary" type="button">
                        <span>Regresar
                            <i class="fas fa-arrow-circle-left"></i>
                        </span>
                    </button>
                </a>
</body>
</html>