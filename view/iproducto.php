<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../others/icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="../others/css/insertarcliente.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <style>
        #contenedor{
            width: 100%;
            display: flex;
            justify-content: center;       
        }

        #contenedor1{
            width: 40%;
            height: 105%;
            margin-top: 55px;
            padding: 15px;
            margin-bottom: 25px;
        }
        #title{
            display: flex;
            justify-content: center;
            padding: 25px;
        }
        #formulario{
            padding-left: 55px;
            padding-right: 55px;
        }

        #botones{
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
        }

        #regresar{
            display: flex;
            justify-content: center;
            margin: 15px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div id="contenedor">
        <div id="contenedor1" class="shadow p-3 mb-5 bg-body rounded h-100%">
            <div id="title">
                <h1>Registro de Productos</h1>
            </div>
            <div id="formulario">
                <form action="../model/insertar.php" method="POST">
                    NOMBRE: <input type="text" name="names" placeholder="Nombres" class="form-control" id="validationDefault01" required>
                    FECHA VENCIMIENTO: <input type="datetimelocal" name="fecha" class="form-control" id="validationDefault01" placeholder="YYYY-MM-DD" required>
                    STOCK: <input type="number" name="stock" placeholder="stock" class="form-control" id="validationDefault01" required>
                    PRESENTACION: <input type="text" name="presentacion" placeholder="Presentacion" class="form-control" id="validationDefault01" required>
                    CONCENTRACION: <input type="text" name = "concentracion" class="form-control" id="exampleFormControlInput1" placeholder="Concentracion" require>
                    FORMA FARMACEUTICA: <input type="text" name = "forfar" class="form-control" id="exampleFormControlInput1" placeholder="Forma farmaceutica" require>
                    REGISTRO SANITARIO: <input type="text" name="regsan" placeholder="Registro sanitario" class="form-control" id="validationDefault01" required>
                    PORCENTAJE DESCUENTO:   <select name="pocentajedes" class="form-select" aria-label="Default select example" required>
                                                <option value="1">No hay descuento</option>
                                                <option value="2">Descuento del 5%</option>
                                            </select>
                    PRECIO: <input type="number" name = "precio" class="form-control" id="exampleFormControlInput1" placeholder="Precio" require>
                    <div id="botones">
                    <input type="submit" value="Registrar" name="enviarpr" class="btn btn-success">

                    <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div id="regresar">
                <a href="../view/producto.php">
                    <button class="btn btn-info">
                        <span>Regresar
                            <i class="fas fa-undo"></i>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

<head>
    <script type="text/javascript" src="../others/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../others/icons/js/all.js"></script>
    <script type="text/javascript" src="../others/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var height = $(window).height();

            $('#contenedor').height(height);
        });
    </script>

</head>

</html>