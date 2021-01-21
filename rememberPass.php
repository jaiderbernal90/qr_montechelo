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
	<link rel="stylesheet" type="text/css" href="css/repass.css">
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

	<section class="container-fluid">
		<div class="row m-0 container-login-form">
			<div class="col s12">
				<div class="title-log center">
					<div class="title-log-desk">
						<h4>¿Olvidó la contraseña?</h4>
						<div class="mt-2">
							<span class="spans-info text-twenty">Ingrese la dirección asociada a su cuenta.</span>
						</div>
						<div class="mt-2">
							<span class="spans-info text-little">Nosotros le enviaremos un enlace para recuperar su contraseña.</span>
						</div>
					</div>
				</div>
				<div class="center-align center">
					<form action="" class="form-control center-align mt-5-phone" method="POST" enctype="multipart/form-data"> 
						<div class="row m-0">
							<div class="input-field col s12 m-0">
								<i class="far fa-envelope prefix p-absolute"></i>
								<input id="icon_prefix" type="email" class="validate">
								<label for="icon_prefix" class="label-text">Correo</label>
								<span class="helper-text left-align" data-error="El correo debe ser válido y contener el dominio Montechelo." data-success="right"></span>
							</div>
						</div>
						<div class="row m-0 mt-2 ">
							<a href="index.php"><button type="button" class="btn btn-rounded z-depth-3 btn-disabled" > VOLVER</button></a>
							<a href=""><button type="button" class="btn btn-rounded z-depth-3"> INGRESAR</button></a>
						</div>
					</form>
				</div>
				<footer class="mt-2 center">
					<span>Desarrollado por Montechelo - SENA &copy;</span>
				</footer>
			</div>
		</div>
		<div class="row container-login">
			<div class="col s12 h-100 w-100 vertical-middle">
				<img src="img/logo-montechelo.png" alt="" class="img-responsive img-logo m-auto">
			</div>
		</div>
	</section>



	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--LOCAL JAVASCRIPT -->
	<script type="text/javascript" src="js/loader.js"></script>

</body>
</html>
