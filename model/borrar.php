<?php
error_reporting(0);

function Imprimir($refe)
{
    echo "<a href='../view/$refe.php'>";
    echo "<button class='btn btn-primary' type='button'>";
    echo "<span>Regresar";
    echo "<i class='fas fa-arrow-circle-left'></i>";
    echo "</span>";
    echo "</button>";
    echo "</a>";
}

function Borrar($data, $id, $idC)
{
    include '../model/conexion.php';

    $sql = "DELETE FROM $data WHERE $idC = $id";
    $result = $mysqli->query($sql);

    if ($result) {
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
            <style>
                #contenedor{
                    width: 100%;
                    display: flex;
                    justify-content: center;
                }
                #contenedor1{
                    width: 90%;
                    display: flex;
                    justify-content: start;
                }
            </style>
        </head>

        <body>
            <div id="contenedor" class="conteiner-fluid">
                <div id="contenedor1" class="conteiner-fluid">

                    <div class="alert alert-success" role="alert">
                        Registro borrado correctamente
                    </div>



                            <?php
                        } else {
                            ?>
                    <div class="alert alert-danger" role="alert">
                        Error al borrar el registro
                    </div>
                            <?php
                            }
                        }
                            ?>

                    <div style="margin-bottom: 15px;">
                        <?php
                        if ($_GET['idproducto']) {
                            Imprimir('producto');
                        } elseif ($_GET['idcliente']) {
                            Imprimir('clientes');
                        } elseif ($_GET['idempleado']) {
                            Imprimir('empleado');
                        } elseif ($_GET['nropedido']) {
                            Imprimir('pedidos');
                        }
                        ?>
                    </div>
                </div>
            </div>

        </body>

        </html>

        <?php


        if ($_GET['idproducto']) {
            $producto = $_GET['idproducto'];
            Borrar('producto', $producto, 'idproducto');
        } else if ($_GET['idcliente']) {
            $cliente = $_GET['idcliente'];
            Borrar('cliente', $cliente, 'idcliente');
        } else if ($_GET['idempleado']) {
            $empelado = $_GET['idempleado'];
            Borrar('empleado', $empelado, 'idempleado');
        } else if ($_GET['nropedido']) {
            $pedido = $_GET['nropedido'];
            Borrar('pedido', $pedido, 'nropedido');
        }


        ?>