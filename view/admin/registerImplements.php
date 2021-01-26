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
            <h2 class="title-principaly ml-1">Registrar Implementos</h2>
            <div class="text-helper">
                <span class="ml-1 pt-5">Completa todos los campos y nosotros nos encargaremos de generar tu QR.</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                <form action="../../controller/admin/create/registerImplement.php" class="col s10 m-auto f-none ml-2 ml-0-phone" method="POST" >
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="name_implement" type="text" class="validate input-control" name="name_implement" maxlength="255" >
                            <label for="name_implement">Nombre del implemento</label>
                        </div>
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Marca del implemento</label>
                            </div>
                            <select class="browser-default" id="marc_implement" name="marc_implement">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="acer">Acer</option>
                              <option value="aerocool">Aerocool</option>
                              <option value="alcatel">Alcatel</option>
                              <option value="apple">Apple</option>
                              <option value="asus">Asus</option>
                              <option value="benq">Benq</option>
                              <option value="corsair">Corsair</option>
                              <option value="dell">Dell</option>
                              <option value="huawei">Huawei</option>
                              <option value="hp">HP</option>
                              <option value="kalley">Kalley</option>
                              <option value="lanix">Lanix</option>
                              <option value="lenovo">Lenovo</option>
                              <option value="lg">LG</option>
                              <option value="logitech">Logitech</option>
                              <option value="acer">Acer</option>
                              <option value="msi">MSI</option>
                              <option value="razer">Razer</option>
                              <option value="redragon">Redragon</option>
                              <option value="sony">Sony</option>
                              <option value="samsung">Samsung</option>
                              <option value="toshiba">Toshiba</option>
                              <option value="xioami">Xioami</option>
                              <option value="otro">Otro</option>
                                <!-- <option value="2">Visualizador</option> -->
                            </select>
                        </div>           
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Estado</label>
                            </div>
                            <select class="browser-default" id="state" name="state">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Bueno</option>
                            <option value="2">Regular</option>
                            <option value="0">Malo</option>
                            <!-- <option value="2">Visualizador</option> -->
                            </select>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="serial" type="text" class="validate input-control" name="serial" maxlength="50">
                            <label for="serial">Serial</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Tipo de implmento</label>
                            </div>
                            <select class="browser-default" name="type_implement">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Técnologico</option>
                              <!-- <option value="2">Visualizador</option> -->
                            </select>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="ip" type="text" class="validate input-control" pattern="[0-9_.]+" oninvalid="setCustomValidity('Ingrese un formato de ip valido: 192.168.0.1')" oninput="setCustomValidity('')"  minlength="8" minlength="20" name="ip">
                            <label for="ip">IP del implemento</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="description" class="materialize-textarea validate" pattern='[A-Za-z0-9_.,""=()/&%#!°|+_<>´´-]+' oninvalid="setCustomValidity('No ingrese caracteres invalidos a la descripción')" oninput="setCustomValidity('')"  minlength="8"  maxlength="255" name="description" required></textarea>
                            <label for="description">Descripción</label>
                        </div>
                    </div>
                    <div class="row mb-2 mb-5-phone">
                        <div class="float-r right-align d-flex-alter">
                            <a href="home.php">
                                <button type="button" class="btn btn-actions btn-disabled">Volver</button>
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
