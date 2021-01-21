<?php 
	require_once('../../model/conexion/conexion.php');
	require_once('../../model/sessions/validarSesion.php');
    
	$email = $_POST['email'];
	$pass1 = $_POST['password'];
	
	$password = md5($pass1);

	$consultas = new validarSesion();
	$result = $consultas -> iniciarSesion($email, $password);
?>