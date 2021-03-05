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
            margin-top: 55px;
            padding: 15px;
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
        }
    </style>
</head>

<body>
    <div id="contenedor">
        <div id="contenedor1" class="shadow p-3 mb-5 bg-body rounded">
            <div id="title">
                <h1>Registro de Clientes</h1>
            </div>
            <div id="formulario">
                <form action="../model/insertar.php" method="POST">
                    TIPO CLIENTE :  <select name="idtipocliente" class="form-select" aria-label="Default select example" required>
                                        <option value="1">Frecuente</option>
                                        <option value="2">Regular</option>
                                    </select>
                    NOMBRES: <input type="text" name="names" placeholder="Nombres" class="form-control" id="validationDefault01" required>
                    DIRECCIÓN: <input type="text" name="direc" placeholder="Direccion" class="form-control" id="validationDefault01" required>
                    TELEFONO: <input type="text" name="tel" placeholder="Telefono" class="form-control" id="validationDefault01" required>
                    CORREO: <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo@mail.com" require>
                    TIPO DOCUMENTO :  <select name="tipodoc" class="form-select" aria-label="Default select example" required>
                                        <option value="1">DNI</option>
                                        <option value="2">PASAPORTE</option>
                                    </select>
                    NRO DOCUMENTO: <input type="text" name="nrodocumento" placeholder="Numero del documento de indentificacion" class="form-control" id="validationDefault01" required>
                    <div id="botones">
                    <input type="submit" value="Enviar" name="enviarc" class="btn btn-success">

                    <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div id="regresar">
                <a href="../view/clientes.php">
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