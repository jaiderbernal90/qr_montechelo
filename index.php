<?php
  require_once('controller/sessions/remember.php');
  validation();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META´S -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Lector y generador QR de la empresa Montechelo"/>
	<meta name="robots" content="index,follow">	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- ICON -->
	<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>QR Montechelo</title>
</head>
<body>
	<!-- LOADER -->
	<div class="centrado" id="onload">
        <div class="wrapper">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <span>Cargando</span>
        </div>
	</div>
	<!-- SECTION ONE -->
	<section class="container-fluid center-align">
		<div class="row container-login m-0">
			<div class="col s12 h-100 w-100 vertical-middle">
				<img src="img/logo-montechelo.png" alt="" class="img-responsive img-logo m-auto">
			</div>
		</div>
		<div class="row container-login-form">
			<div class="col s12">
				<div class="title-log center">
					<h4>BIENVENIDO</h4>
					<div class="title-log-desk">
						<span>Bienvenido a QR Montechelo</span>
						<h4>INICIA SESIÓN</h4>
					</div>
				</div>
				<div class="center-align center">
					<form action="controller/sessions/iniciarSesion.php" class="form-control center-align" method="POST" enctype="multipart/form-data"> 
						<div class="row m-0">
							<div class="input-field col s12 m-0">
								<i class="far fa-envelope prefix p-absolute"></i>
								<input id="icon_prefix" type="email" class="validate" pattern="[a-zA-Z0-9_.-]+([.][a-zA-Z0-9_]+)*@montechelo.com" oninvalid="setCustomValidity('Ingrese un formato de correo valido: nombre@montechelo.com')" oninput="setCustomValidity('')"  minlength="8" name="email" required>
								<label for="icon_prefix" class="label-text">Correo</label>
								<span class="helper-text left-align" data-error="El correo debe ser válido y contener el dominio Montechelo." data-success="Email válido"></span>
							</div>
						</div>
						<div class="row m-0">
							<div class="input-field col s12 m-0 mt-2">
								<i class="fas fa-lock prefix p-absolute"></i>
								<input id="icon_pass" type="password" class="validate" data-title="Ingresa tu contraseña" minlength="8" name="password" required>
								<label for="icon_pass" class="label-text" >Contraseña</label>
								<span id="spanMostrar" class="form-clear d-none"><i id="iconMostrar" class="fas fa-eye"></i></span>
							</div>
						</div>
						<div class="right-align link-pass m-3-phone">
							<span><a href="rememberPass.php">¿Olvidó la contraseña?</a></span>
						</div>
						<div class="row m-0">
							<button type="submit" class="btn btn-rounded z-depth-3"> INGRESAR</button>
						</div>
					</form>
				</div>
				<footer class="mt-2 center">
					<span>Desarrollado por Montechelo - SENA &copy;</span>
				</footer>
			</div>
		</div>
	</section>



	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--LOCAL JAVASCRIPT -->
	<script type="text/javascript" src="js/input-pass.js"></script>
	<script type="text/javascript" src="js/loader.js"></script>

</body>
</html>
