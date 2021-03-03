<?php

function Regresar($refe){
    echo "<a style = 'margin:50px' href='../view/$refe.php'>";
    echo "<button type='button' class='btn btn-primary'>Regresar</button>";
    echo "</a>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../others/bootstrap/css/bootstrap.min.css">
    <style>
        #contenedor{
            width: 100%;
            padding: 15px;
        }
        #contenedor1{
            width: 100%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
    </style>
</head>
<body>
    <div id="contenedor">
        <div id="contenedor1">
            <div class="alert alert-success" role="alert">
                Registro modificado correctamente
            </div>

        </div>   
    </div>
</body>
</html>