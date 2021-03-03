<?php

require '../model/conexion.php';

$errors = array();

if (isset($_POST['enviare'])) {
    //Si existe el elemento 
    $nombre = $_POST['names'];
    $especialidad = $_POST['espe'];
    $colegiado = $_POST['num'];
    $cargo = $_POST['cargo'];

    if (!empty($nombre) && !empty($especialidad) && !empty($colegiado) && !empty($cargo)) {
        //No se encuentra vacia ninguna variable
        $sql = "INSERT INTO doctor (Nombre,Especialidad,ncolegiado,Cargo) VALUES ('$nombre','$especialidad','$colegiado','$cargo')";
        $resul = $mysqli->query($sql);
        if($resul){
            require('../others/succes.php');
            Regresar('doctores');
        }else{
            require('../others/error.php');
            Regresar('doctores');
        }
    }
} else {
    $errors[] = "Rellena Todos los campos";
}
?>