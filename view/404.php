<?php
    require_once('../controller/sessions/security/getUrlHome.php');
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
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- ICON -->
	<link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<title>QR Montechelo</title>
</head>
<body class="bg-white">

	<div class="container-404">
        <div class="part-one">
            <div class="title-text">
                <h5>¡OOPS!</h5>
            </div>
            <div class="img-no-fun">
                <img src="../img/404.svg" alt="Página no encontrada">
            </div>
        </div>
        <div class="part-two">
            <div class="title-text-two">
                <h5>Página no encontrada</h5>
            </div>
            <div class="text-description-404">
                <p>Lamentamos que no se haya podido encontrar la página solicitada. <br>
                Vuelve a la página de inicio.</p>
                <?php echo getUrlHome(); ?>
            </div>
        </div>

    </div>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
