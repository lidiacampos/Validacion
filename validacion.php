<?php 

include 'usuarios.php';
include 'view.php';
include 'controlador.php';

$usuario = new Usuarios();
$controlador = new Controlador();

if($usuario->validar($_REQUEST['usuario'], $_REQUEST['contraseña']))
	$controlador->getVista()->mostrarVista('bienvenida');
else
	$controlador->getVista()->mostrarVista('error');

?>
