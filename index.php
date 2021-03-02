<?php

require '../Farmacia2/model/conexion.php';

$sql = "SELECT * FROM usario";

$result = $mysqli->query($sql);

$fallos_sesion=false;

    if(isset($_POST['Enviar'])){

        $user = $_POST['User'];
        $pass = $_POST['Pass'];
        $sql = "SELECT * FROM usario WHERE email=$user and pass = $pass ";
        $sentencia = $mysqli->query($sql);
        
        if($result){
            if($result->num_rows>0){
                while($id = $result->fetch_assoc()){
                    if($user === $id['email']&&$pass === $id['pass']){
                        header('location:view/index.php');
                    }
                }
            }
        }else{
            $fallos_sesion=true; 
            }
    }



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="shortcut icon" href="../Farmacia2/others/img/logo.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Farmacia2/others/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Farmacia2/others/icons/css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../Farmacia2/others/css/login.css'>
    <script src='main.js'></script>
</head>

<body>
    <div id="login">
        <div id="login1">
            <div id="login2">
                <div style="margin-top: -35px;" id="imagen">
                    <img src="../Farmacia2/others/img/login.png">
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <span style="margin-bottom: 10px;">Ingresar Email</span>
                    <input required style="margin-bottom: 15px;" class="form-control" aria-describedby="emailHelp" type="email" name="User" id="" placeholder="Ingresa tú email">
                    <span style="margin-bottom: 10px;">Password</span>
                    <input required style="margin-bottom: 15px;" class="form-control" aria-describedby="passwordHelpBlock" type="password" name="Pass" id="" placeholder="Ingresa tu contraseña">
                    <div id="botones">
                        <input class="btn btn-success" type="submit" value="Enviar" name="Enviar">
                        <input class="btn btn-danger" type="reset" value="Cancelar">
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

<head>
    <script type="text/javascript" src="../Farmacia2/others/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../Farmacia2/others/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Farmacia2/others/icons/js/all.js"></script>
</head>

</html>