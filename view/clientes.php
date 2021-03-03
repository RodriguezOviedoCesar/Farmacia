<?php

require_once '../model/select.php';

$cliente = new Select('cliente');
$datos = array('idcliente','nombres', 'direccion','telefono','correo','nrodocumento');
$parametros = array('ID','Nombre','Direccion','Telfono','Correo', 'DNI');
$cliente->Select1('cliente',$datos , $parametros, 'iclientes');

?>
