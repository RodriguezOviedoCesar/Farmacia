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
    <link rel="stylesheet" href="../others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../others/icons/css/all.css">
</head>
<body>
<div class="alert alert-success" role="alert">
                Registro borrado correctamente
            </div>
<?php
        }else{
?>
            <div class="alert alert-danger" role="alert">
                Error al borrar el registro
            </div>
<?php
        }
    }
?>

<div>
    <?php
        if($_GET['idproducto']){
            echo "<a href='../view/producto.php'>";
            echo   "<button type='button' class='btn btn-primary'>Regresar</button>";
            echo "</a>";
        }elseif($_GET['idcliente']){
            echo "<a href='../view/clientes.php'>";
            echo   "<button type='button' class='btn btn-primary'>Regresar</button>";
            echo "</a>";
        }elseif ($_GET['idempleado']) {
            echo "<a href='../view/clientes.php'>";
            echo   "<button type='button' class='btn btn-primary'>Regresar</button>";
            echo "</a>";
        }
    ?>
</div>

</body>

</html>

<?php
    

    if($_GET['idproducto']){
        $producto = $_GET['idproducto'];
        Borrar('producto',$producto,'idproducto');
    }else if($_GET['idcliente']){
        $cliente = $_GET['idcliente'];
        Borrar('cliente',$cliente,'idcliente');
    }else if($_GET['idempleado']){
        $empelado = $_GET['idempleado'];
        Borrar('empleado',$empelado,'idempleado');
    }
    


?>