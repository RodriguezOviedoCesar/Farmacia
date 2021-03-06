<?php

class Select
{
    public string $data;
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function Select1(string $data, $datos, $parametros, string $ref, string $ref2)
    {
        require_once '../model/conexion.php';
        // foreach($dato as $dat){
        //     echo $dat."<br>";
        // }
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
                            <?php
                            foreach ($parametros as $parametro) {
                                for ($i = 0; $i <= 0; $i++) {
                                    echo "<th>";
                                    echo $parametro;
                                    echo "</th>";
                                }
                            }

                            ?>
                        </tr>
                        <?php

                        try {
                            $errors = array();
                            $sql = "SELECT * FROM $data ";
                            $result = $mysqli->query($sql);

                            // $id = $result->fetch_assoc();            
                            // $fila = $result->fetch_assoc();
                            // echo "</div>";
                            // for($i =0; $i<$result->fetch_assoc();$i++){ Esto lo podemos tomar en cuenta para la operación
                            //     echo $i;
                            // }
                            if ($result) {
                                if ($result->num_rows > 0) {
                                    while ($id = $result->fetch_assoc()) {
                        ?>
                                        <tr>
                                            <?php

                                            foreach ($datos as $dat) {
                                                echo "<td>";
                                                echo $id[$dat];
                                                echo "</td>";
                                            }
                                            ?>
                                            <td style="border: none;">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                    <a href="../model/borrar.php?<?php echo $datos[0] ?>=<?php echo $id[$datos[0]] ?>">
                                                        <button class="btn btn-danger me-md-2" type="button">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                            <td style="border:none">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                                    <a href="../view/<?php echo $ref2 ?>.php?<?php echo $datos[0] ?>=<?php echo $id[$datos[0]] ?>">
                                                        <button class="btn btn-warning me-md-2" type="button">
                                                            <i class="fas fa-user-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                            <?php
                                            if ($datos[0] === 'nropedido') {
                                            ?>
                                                <td style="border:none">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-right:-100px">
                                                    <a href="../view/vpedidos.php?<?php echo $datos[0] ?>=<?php echo $id[$datos[0]] ?>">
                                                        <button class="btn btn-warning me-md-2" type="button">
                                                            <i class="far fa-eye"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                            <?php
                                            }
                                            ?>

                                        </tr>
                        <?php

                                    }
                                } else {
                                    $errors[] = "No hay registros para mostrar";
                                }
                            } else {
                                $errors[] = "No hay registros para mostrar";
                            }

                            if (count($errors) > 0) {
                                echo "<div class='alert alert-danger' role='alert'>";
                                foreach ($errors as $error) {
                                    echo $error;
                                }
                                echo "</div>";
                            }
                        } catch (Exception $errors) {
                            echo "Excepcion  " . $errors;
                        }


                        ?>
                    </table>
                    <div style="margin-bottom: 50px; margin-top:-45px; margin-right:150px " class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="../view/<?php echo $ref ?>.php">
                            <button class="btn btn-success me-md-2" type="button">
                                <span>Agregar
                                    <i class="fas fa-user-plus"></i>
                                </span>
                            </button>
                        </a>
                        <a href="../view/index.php">
                            <button class="btn btn-primary" type="button">
                                <span>Regresar
                                    <i class="fas fa-arrow-circle-left"></i>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </body>

        <head>
            <script type="text/javascript" src="../others/bootstrap/jquery-3.5.1.min.js"></script>
            <script type="text/javascript" src="../others/bootstrap/js/bootstrap.min.js"></script>
        </head>

        </html>

<?php
    }
}
?>