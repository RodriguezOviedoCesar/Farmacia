<?php

require_once '../model/select.php';

$empleado = new Select('empleado');
$datos = array('idempleado','dni','nombres','direccion','telefono');
$parametros = array('ID','DNI','Nombre', 'Direccion', 'Telefono');
$empleado->Select1('empleado',$datos , $parametros,'iempleado','mempleado');
?>
