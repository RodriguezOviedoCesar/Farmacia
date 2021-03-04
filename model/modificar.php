<?php

error_reporting(0);

require('conexion.php');

$errors = array();

if($_POST['enviare']){
    if(isset($_POST['enviare'])){
        $nombre = $_POST['names'];
        $espe = $_POST['espe'];
        $num = $_POST['num'];
        $cargo = $_POST['cargo'];
        $id = $_POST['miID'];
    
        
    
        if(!empty($nombre) && !empty($espe) && !empty($num) && !empty($cargo) && !empty($id)){
            $sql = "UPDATE doctor SET Nombre = '$nombre', Especialidad = '$espe' , ncolegiado = '$num', Cargo = '$cargo' 
            WHERE iddoctor = $id";
    
            $result = $mysqli->query($sql);
    
            if($result){
                require('../others/succes.php');
                Regresar('doctores');
            }else{
                require('../others/error.php');
                Regresar('doctores');
            }
        }else{
           $errors[] = "Rellena todos los campos";  
        }
    }
}else if($_POST['enviarc']){
    if(isset($_POST['enviarc'])){
        $tcli = $_POST['idtipocliente'];
        $nombre = $_POST['names'];
        $dir = $_POST['direc'];
        $tel = $_POST['tel'];
        $correo = $_POST['email'];
        $tdoc = $_POST['tipodoc'];
        $ndoc = $_POST['nrodocumento'];
        $id = $_POST['miID'];
    
        
    
        if(!empty($tcli) && !empty($nombre) && !empty($dir) && !empty($tel) && !empty($correo) && !empty($tdoc) && !empty($ndoc) && !empty($id)){
            $sql = "UPDATE cliente SET idtipocliente = '$tcli', nombres = '$nombre' , direccion = '$dir', telefono = '$tel'  , 
            correo = '$correo', idtipodocumento = '$tdoc', nrodocumento = '$ndoc' WHERE idcliente = $id";
    
            $result = $mysqli->query($sql);
    
            if($result){
                require('../others/succes.php');
                Regresar('doctores');
            }else{
                require('../others/error.php');
                Regresar('doctores');
            }
        }else{
           $errors[] = "Rellena todos los campos";  
        }
    }
}

?>