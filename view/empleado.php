<?php

require_once '../model/select.php';

$empleado = new Select('empleado');
$datos = array('idempleado','idtipoestado', 'idcargoempleado','dni','nombres','direccion','telefono');
$parametros = array('ID','Estado','Cargo','DNI','Nombre', 'Direccion', 'Telefono');
$empleado->Select1('empleado',$datos , $parametros);
?>
