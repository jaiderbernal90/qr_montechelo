<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
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
        <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
        <!-- LOCAL CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <title>QR Montechelo</title>
    </head>
<body>  
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
    <?php include('header.php') ?>
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- SECTION ONE -->
	<section id="section-one">
        <div class="row d-block pl-phone">
            <h2 class="title-principaly ml-1">Leer QR</h2>
            <div class="text-helper">
                <span class="ml-1 pt-5">Sube un archivo en formato .png / . pdf para que nosotros podamos leer tu código QR</span>
            </div>
        </div>
        <div class="row">
            <form action="" class="form col s12 mt-1">
                <div class="col s12">
                    <div class="file-upload center-align">
                             <input type="file" name="codeQR" id="codeQR" class="input-file file" required accept=".png, .pdf">
                             <label for="codeQR" id="fileName">Ningun archivo seleccionado</label>
                    </div>
                </div>
                <div class="col s12 center-align mt-1 d-flex-alter mt-3">
                    <a href="home.php"><button type="button" class="btn btn-actions btn-disabled mr-1">Volver</button></a>
                    <a href="leerqrCamera.php"><button type="button" class="btn btn-actions btn-color-secundary mr-1">Cámara</button></a>
                    <button type="submit" class="btn btn-actions btn-color-primary">Enviar</button>
                </div>
            </form>
        </div>   
	</section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Developed by Montechelo - SENA &copy; </h5>
    </footer>
	<!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/file-input.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
