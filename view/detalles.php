<?php

require('../model/conexion.php');

$errors = array();

$sql = "SELECT pr.nomprod , pr.presentacion, pr.idporcentajedescuento, pr.precionuit, 
        cl.nombres as names, e.nombres, p.nropedido, p.fechapedido, p.montototal, pd.porcentajedescuento,
        d.iddetallepedido
        FROM detallepedido d, pedido p, producto pr, cliente cl, empleado e, procentajedescuento pd
        WHERE d.nropedido = p.nropedido and pr.idproducto = d.idproducto and cl.idcliente = p.idcliente
        and e.idempleado = p.idempleado and pd.idporcentajedescuento = pr.idporcentajedescuento";


$result = $mysqli->query($sql);

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
    <link rel="stylesheet" href="../others/css/select.css">
</head>

<body>
    <div id="contenedor">
        <div id="contenedordoctor">
            <div id="img">
                <img class="img-fluid" src="../others/img/logo.png" alt="logo" title="logo">
            </div>
            <table class="table" style="margin-bottom: 80px;">
                <tr class="table-dark">
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>FECHA</th>
                    <th>MONTO TOTAL</th>
                    <th>DESCUENTO</th>
                </tr>
                <?php
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($datos = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td><?php echo $datos['nomprod'] ?></td>
                                <td><?php echo $datos['precionuit'] ?></td>
                                <td><?php echo $datos['fechapedido'] ?></td>
                                <td><?php echo $datos['montototal'] ?></td>
                                <td><?php echo $datos['porcentajedescuento'] ?>%</td>
                                <td style="border: none;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="far fa-eye"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Detalle de pedidos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    NOMBRE PRODUCTO : <input value="<?php echo $datos['nomprod']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    PRESENTACION: <input value="<?php echo $datos['presentacion']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    DESCUENTO: <input value="<?php echo $datos['idporcentajedescuento']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    PRECIO: <input value="<?php echo $datos['precionuit']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    CLIENTE NOMBRE: <input value="<?php echo $datos['names']?>" type="email" class="form-control" id="exampleFormControlInput1" disabled >
                                                    EMPLEADO NOMBRE: <input value="<?php echo $datos['nombres']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    NRO PREDIDO: <input value="<?php echo $datos['nropedido']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    FECHA PEDIDO: <input value="<?php echo $datos['fechapedido']?>" type="text" class="form-control" id="validationDefault01" disabled >
                                                    MONTO TOTAL: <input value="<?php echo $datos['montototal']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                    DESCUENTO: <input value="<?php echo $datos['porcentajedescuento']?>%" type="text" class="form-control" id="validationDefault01" disabled>
                                                    DETALLE PEDIDO: <input value="<?php echo $datos['iddetallepedido']?>" type="text" class="form-control" id="validationDefault01" disabled>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

<head>
    <script type="text/javascript" src="../others/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../others/bootstrap/js/bootstrap.min.js"></script>
</head>

</html>