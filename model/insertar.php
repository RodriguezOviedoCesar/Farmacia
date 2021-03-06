<?php

error_reporting(0);

require '../model/conexion.php';

$errors = array();

$e = $_POST['enviare'];
$c = $_POST['enviarc'];
$em = $_POST['enviarem'];
$pro = $_POST['enviarpr'];

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
}else if($em){
    if (isset($_POST['enviarem'])) {
        //Si existe el elemento 
        $tipoes = $_POST['idtipoestado'];
        $cargo = $_POST['idcargoempleado'];  
        $dni = $_POST['dni'];
        $nombres = $_POST['names'];
        $direccion = $_POST['direccion'];
        $tel = $_POST['telefono'];
    
        if (!empty($tipoes) && !empty($cargo) && !empty($dni) && !empty($nombres) && !empty($direccion) && !empty($tel)) {
            //No se encuentra vacia ninguna variable
            $sql = "INSERT INTO empleado (idtipoestado,idcargoempleado,dni,nombres,direccion, telefono) 
            VALUES ('$tipoes','$cargo','$dni','$nombres','$direccion','$tel')";
            $resul = $mysqli->query($sql);
            if($resul){
                require('../others/succes.php');
                Regresar('empleado');
            }else{
                require('../others/error.php');
                Regresar('empleado');
            }
        }
    } else {
        $errors[] = "Rellena Todos los campos";
    }
}else if($pro){
    if (isset($_POST['enviarpr'])) {
        //Si existe el elemento 
        $nombre = $_POST['names'];
        $fecha = $_POST['fecha'];  
        $stock = $_POST['stock'];
        $presentacion = $_POST['presentacion'];
        $concentracion = $_POST['concentracion'];
        $forfar = $_POST['forfar'];
        $regsan = $_POST['regsan'];
        $porcentajedes = $_POST['pocentajedes'];
        $precio = $_POST['precio'];
    


        if (!empty($nombre) && !empty($fecha) && !empty($stock) && !empty($presentacion) && !empty($concentracion)
         && !empty($forfar) && !empty($regsan) && !empty($porcentajedes) && !empty($precio)) {
            //No se encuentra vacia ninguna variable
            $sql = "INSERT INTO producto (nomprod,fechahoravenc,stock,presentacion,concentracion, formafarmaceutica, registrosanitario, idporcentajedescuento, precionuit) 
            VALUES ('$nombre','$fecha','$stock','$presentacion','$concentracion','$forfar','$regsan','$porcentajedes','$precio')";
            $resul = $mysqli->query($sql);
            if($resul){
                require('../others/succes.php');
                Regresar('producto');
            }else{
                require('../others/error.php');
                Regresar('producto');
            }
        }
    } else {
        $errors[] = "Rellena Todos los campos";
    }
}else{
    echo "ERROR";
}
?>