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
        if($result){
            echo "<div class='alert alert-success' role='alert'>";
            echo       "Registro borrado correctamente";
            echo  "</div>";
        }
    }
}else{
    $errors [] = "Intentalo mas tarde";
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
            <?php
                if(count($errors)>0){
                    foreach($errors as $error){
                    echo "<div class='alert alert-danger' role='alert'>";
                    echo "<spam>";
                    echo "<i class='fas fa-exclamation-circle'></i>Error: ".$error;
                    echo "</spam>";
                    echo "</div>";
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong><i class='fas fa-exclamation-circle'></i></strong> Se produjo un error intentalo mas tarde
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php
                    }
                }
            ?>
                <a href="../view/doctores.php">
                    <button class="btn btn-primary" type="button">
                        <span>Regresar
                            <i class="fas fa-arrow-circle-left"></i>
                        </span>
                    </button>
                </a>

</body>
<head>
            <script type="text/javascript" src="../others/icons/js/all.js"></script>
            <script type="text/javascript" src="../others/bootstrap/jquery-3.5.1.min.js"></script>
            <script type="text/javascript" src="../others/bootstrap/js/bootstrap.min.js"></script>
</head>
</html>