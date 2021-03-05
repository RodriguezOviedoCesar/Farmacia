<?php

error_reporting(0);

require '../model/conexion.php';

$errors = array();

$e = $_POST['enviare'];
$c = $_POST['enviarc'];

if($e){
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
}else if($c){
    if (isset($_POST['enviarc'])) {
        //Si existe el elemento 
        $id = $_POST['idtipocliente'];
        $nombre = $_POST['names'];  
        $direccion = $_POST['direc'];
        $telefono = $_POST['tel'];
        $correo = $_POST['email'];
        $tipodoc = $_POST['tipodoc'];
        $nrodocumento = $_POST['nrodocumento'];
    
        if (!empty($id) && !empty($nombre) && !empty($direccion) && !empty($telefono) && !empty($correo) && !empty($tipodoc) && !empty($nrodocumento)) {
            //No se encuentra vacia ninguna variable
            $sql = "INSERT INTO cliente (idtipocliente,nombres,direccion,telefono,correo, idtipodocumento, nrodocumento) 
            VALUES ('$id','$nombre','$direccion','$telefono','$correo','$tipodoc','$nrodocumento')";
            $resul = $mysqli->query($sql);
            if($resul){
                require('../others/succes.php');
                Regresar('clientes');
            }else{
                require('../others/error.php');
                Regresar('clientes');
            }
        }
    } else {
        $errors[] = "Rellena Todos los campos";
    }
}
?>