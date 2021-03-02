<?php

require('conexion.php');

$errors = array();

if(isset($_POST['enviare'])){
    $nombre = $_POST['names'];
    $espe = $_POST['espe'];
    $num = $_POST['num'];
    $cargo = $_POST['cargo'];
    $id = $_POST['miID'];

    if(!empty($nombre) && !empty($espe) && !empty($num) && !empty($cargo) && !empty($id)){
        $sql = "UPDATE doctor SET Nombre = '$nombre', Especialidad = '$espe' , ncolegiado = '$num', Cargo = '$cargo' 
        WHERE id = $id";
        
        $result = $mysqli->query($sql);
    }else{
       $errors[] = "Rellena todos los campos";  
    }
}

?>