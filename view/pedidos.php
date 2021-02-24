<?php

require_once '../model/select.php';

$pedidos = new Select('pedido');
$datos = array('nropedido','fechapedido', 'montototal');
$parametros = array('Pedido nmr°','Fecha','Total');
$pedidos->Select1('pedido',$datos , $parametros);
?>
