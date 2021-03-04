<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../others/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../others/icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="../others/css/insertardoctor.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div id="contenedor">
        <div id="contenedor1">
            <div id="title">
                <h1>Registro de Doctores</h1>
            </div>
            <div id="formulario">
                <form action="../model/insertar.php" method="POST">
                    NOMBRES: <input type="text" name="names" placeholder="Nombres de doctores" class="form-control" id="validationDefault01" required>
                    ESPECIALIDAD: <input type="text" name="espe" placeholder="Especialidad del doctor" class="form-control" id="validationDefault01" required>
                    NRO. COLEGIADO: <input type="text" name="num" placeholder="Nro de Colegiado" class="form-control" id="validationDefault01" required>
                    CARGO: <input type="text" name="cargo" placeholder="Cargo que desarrolla" class="form-control" id="validationDefault01" required>
                    <div id="botones">
                    <input type="submit" value="Enviar" name="enviare" class="btn btn-success">

                    <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div id="regresar">
                <a href="../view/doctores.php">
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