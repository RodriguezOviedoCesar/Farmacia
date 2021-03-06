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
                Regresar('clientes');
            }else{
                require('../others/error.php');
                Regresar('clientes');
            }
        }else{
           $errors[] = "Rellena todos los campos";  
        }
    }
}else if($_POST['enviarem']){
        if(isset($_POST['enviarem'])){
            $tipoes = $_POST['idtipoestado'];
            $cargo = $_POST['idcargoempleado'];  
            $dni = $_POST['dni'];
            $nombres = $_POST['names'];
            $direccion = $_POST['direccion'];
            $tel = $_POST['telefono'];
            $id = $_POST['miID'];

            if(!empty($tipoes) && !empty($cargo) && !empty($dni) && !empty($nombres) && !empty($direccion) && !empty($tel) &&  !empty($id)){
                $sql = "UPDATE empleado SET idtipoestado = '$tipoes', idcargoempleado = '$cargo' , dni = '$dni', nombres = '$nombres'  , 
                direccion = '$direccion', telefono = '$tel' WHERE idempleado = $id";
    
                $result = $mysqli->query($sql);
            
                if($result){
                    require('../others/succes.php');
                    Regresar('empleado');
                }else{
                    require('../others/error.php');
                    Regresar('empleado');
                }
            }else{
               $errors[] = "Rellena todos los campos";  
            }

        }
        
}else if($_POST['enviarpr']){
    if(isset($_POST['enviarpr'])){
        $nombre = $_POST['names'];
        $fecha = $_POST['fecha'];  
        $stock = $_POST['stock'];
        $presentacion = $_POST['presentacion'];
        $concentracion = $_POST['concentracion'];
        $forfar = $_POST['forfar'];
        $regsan = $_POST['regsan'];
        $porcentajedes = $_POST['pocentajedes'];
        $precio = $_POST['precio'];
        $id = $_POST['miID'];

        if (!empty($nombre) && !empty($fecha) && !empty($stock) && !empty($presentacion) && !empty($concentracion)
         && !empty($forfar) && !empty($regsan) && !empty($porcentajedes) && !empty($precio) && !empty($id)){
            $sql = "UPDATE producto SET nomprod = '$nombre', fechahoravenc = '$fecha' , stock = '$stock', presentacion = '$presentacion'  , 
            concentracion = '$concentracion', formafarmaceutica = '$forfar', registrosanitario = '$regsan' ,
            idporcentajedescuento = $porcentajedes, precionuit = $precio WHERE idproducto = $id";

            $result = $mysqli->query($sql);
        
            if($result){
                require('../others/succes.php');
                Regresar('producto');
            }else{
                require('../others/error.php');
                Regresar('producto');
            }
        }else{
           $errors[] = "Rellena todos los campos";  
        }

    }
}else if($_POST['enviarp']){
    if(isset($_POST['enviarp'])){
        $nombre = $_POST['names'];
        $fecha = $_POST['fecha'];  
        $stock = $_POST['stock'];
        $presentacion = $_POST['presentacion'];
        $concentracion = $_POST['concentracion'];
        $forfar = $_POST['forfar'];
        $regsan = $_POST['regsan'];
        $porcentajedes = $_POST['pocentajedes'];
        $precio = $_POST['precio'];
        $id = $_POST['miID'];

        if (!empty($nombre) && !empty($fecha) && !empty($stock) && !empty($presentacion) && !empty($concentracion)
         && !empty($forfar) && !empty($regsan) && !empty($porcentajedes) && !empty($precio) && !empty($id)){
            $sql = "UPDATE producto SET nomprod = '$nombre', fechahoravenc = '$fecha' , stock = '$stock', presentacion = '$presentacion'  , 
            concentracion = '$concentracion', formafarmaceutica = '$forfar', registrosanitario = '$regsan' ,
            idporcentajedescuento = $porcentajedes, precionuit = $precio WHERE idproducto = $id";

            $result = $mysqli->query($sql);
        
            if($result){
                require('../others/succes.php');
                Regresar('producto');
            }else{
                require('../others/error.php');
                Regresar('producto');
            }
        }else{
           $errors[] = "Rellena todos los campos";  
        }

    }
}  

?>