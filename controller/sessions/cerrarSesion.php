<?php  
	require_once('../../model/conexion/conexion.php');
	require_once('../../model/sessions/validarSesion.php');
	
	$consultas = new validarSesion();
	$result = $consultas -> cerrarSesion();
?>