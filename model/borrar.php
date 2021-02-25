<?php

    function Borrar($data, $id , $idC){
        include '../model/conexion.php';

        $sql = "DELETE FROM $data WHERE $idC = $id";
        $result = $mysqli->query($sql);
        
        if($result){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>
<?php
        }else{
?>
            <div class="alert alert-danger" role="alert">
                A simple success alert—check it out!
            </div>
<?php
        }
    }
?>
</body>
</html>

<?php
    

    if($_GET['idproducto']){
        $producto = $_GET['idproducto'];
        Borrar('producto',$producto,'idproducto');
    }else if($_GET['idcliente']){
        $cliente = $_GET['idcliente'];
        echo $cliente;
    }else if($_GET['idempleado']){
        $empelado = $_GET['idempleado'];
        echo $empelado;
    }
    


?>