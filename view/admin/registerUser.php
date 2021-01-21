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
            <h2 class="title-principaly ml-1">Registrar Usuarios</h2>
            <div class="text-helper">
                <span class="ml-1 pt-5">Completa todos los campos del formulario para registrar un usuario.</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                <form action="../../controller/admin/create/registerUser.php" method="POST" class="col s10 m-auto f-none ml-2 ml-0-phone">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="last_name" type="text" class="validate input-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]{2,255}" oninvalid="setCustomValidity('Ingrese un nombre válido')" oninput="setCustomValidity('')"  minlength="5" name="name" required>
                            <label for="last_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Tipo de documento</label>
                            </div>
                            <select class="browser-default" required name="type_id">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Cédula de Ciudadania</option>
                              <option value="2">Cédula de Extranjeria</option>
                              <option value="3">Tarjeta de Identidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="document" type="text" class="validate input-control" pattern="[0-9]+" oninvalid="setCustomValidity('Ingrese un documento válido')" oninput="setCustomValidity('')"  minlength="8" maxlength="10" name="document" required>
                            <label for="document">Documento</label>
                        </div>
                        <div class="input-field col m6 s12 mt-2">
                            <div>
                                <label class="prefix-label">Rol</label>
                            </div>
                            <select class="browser-default" required name="role">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Administrador</option>
                              <option value="2">Visualizador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 ">
                            <input id="email_inline" type="email" class="validate input-control" pattern="[a-zA-Z0-9_.-]+([.][a-zA-Z0-9_]+)*@montechelo.com" oninvalid="setCustomValidity('Ingrese un formato de correo valido: nombre@montechelo.com')" oninput="setCustomValidity('')"  minlength="8" name="email" required> 
                            <label for="email_inline">Correo</label>
                        </div>
                    </div>
                    <div class="row mb-5-phone ">
                        <div class="float-r right-align d-flex-alter">
                            <a href="home.php" class="btn btn-actions btn-disabled">
                                Volver
                            </a>
                            <button type="submit" class="btn btn-actions btn-color-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   
	</section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Developed by Montechelo - SENA &copy; </h5>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
