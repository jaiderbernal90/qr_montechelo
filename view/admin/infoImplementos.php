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
            <h2 class="title-principaly ml-1">TABLET 4" Y453-004</h2>
        </div>
        <div class="row d-flex pl-phone">
            <div class="col s6 d-flex ml-1" >
                <h6 class="f-size-22 f-weight-bold">Marca: </h6>
                <span class="f-size-20">SAMSUNG</span>
            </div>
            <div class="col s6">
                <h6 class="f-size-22 f-weight-bold">Estado: </h6>
                <span class="f-size-20">Bueno</span>
            </div>
        </div>
        <div class="row d-flex pl-phone">
            <div class="col s6 ml-1">
                <h6 class="f-size-22 f-weight-bold">Serial: </h6>
                <span class="f-size-20">15151515151</span>
            </div>
            <div class="col s6">
                <h6 class="f-size-22 f-weight-bold">Tipo de Implemento: </h6>
                <span class="f-size-20">Tecnologico</span>
            </div>
        </div>
        <div class="row d-flex pl-phone">
            <div class="col s12 ml-1">
                <h6 class="f-size-22 f-weight-bold">IP: </h6>
                <span class="f-size-20">192.0.1.687</span>
            </div>
        </div>
        <div class="row d-flex pl-phone">
            <div class="col s12 ml-1">
                <h6 class="f-size-22 f-weight-bold">Descripción: </h6>
                <span class="left-aling f-size-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officiis autem aspernatur eius enim reprehenderit consequatur nobis odio, incidunt consequuntur? Omnis accusamus assumenda dolore dignissimos! A doloribus odit id officia!</span>
            </div>
        </div>
        <div class="row">
            <div class="col s10 title-divider m-auto ml-2">
                <h5>Mi observación</h5>
                <div class="divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <form action="">
                    <div class="row pl-phone">
                    <div class="input-field col s10 m-auto ">
                            <div>
                                <label class="prefix-label">Estado</label>
                            </div>
                            <select class="browser-default">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="1">Bueno</option>
                              <option value="">Regular</option>
                              <option value="">Malo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pl-phone mt-3">
                        <div class="input-field col s10 m-auto">
                            <textarea id="observation" class="materialize-textarea input-control"></textarea>
                            <label for="observation">Observación</label>
                        </div>
                    </div>
                    <div class="row pl-phone">
                        <div class="col s10 m-auto">
                            <p>Evidencia</p>
                            <span>Sube tus archivos o fotos donde se evidencie el estado del implemento.</span>
                            <div class="file-upload center-align mt-1 ">
                                 <input type="file" name="evidence" id="evidence" class="input-file file" required accept=".png, .jpg, .pdf, .docx, .doc " multiple>
                                <label for="evidence" id="fileName" class="mt-3">Ningun archivo seleccionado</label>
                            </div>
                        </div>
                    </div>
                    <div class="row pl-phone">
                        <div class=" col s12 m10 m-auto center-align ">
                            <button class="btn btn-actions btn-color-primary mb-2 mt-2">Enviar</button>
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
    <script type="text/javascript" src="../../js/file-input.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>


</body>
</html>
