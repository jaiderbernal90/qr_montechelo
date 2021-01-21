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
            <h2 class="title-principaly ml-1">Notificaciones</h2>
        </div>
        <div class="row d-flex">
            <div class="col s12 aling-right-response mr-5">
                <button type="button" class="btn btn-actions btn-color-secundary btn-special  m-auto">Marcar como leídas</button>
                <button type="button" class="btn btn-actions btn-color-primary btn-special  m-auto">Eliminar Todas</button>
            </div>
        </div>  
        <div class="cont-notifications m-auto my-3-phone">
            <div class="row p-0 m-0">
                <div class="col s12 border-bottom p-0 rounded bg-white">
                    <div class="card-notification">
                        <div class="header-card-not">
                            <div class="imgs">
                                <img src="../../img/user.png" alt="Imagen de usuario">
                                <div class="cont-icon">
                                    <i class="fas fa-qrcode"></i>
                                </div>
                                <!-- SUB CUADRADO -->
                            </div>
                        </div>
                        <div class="body-card">
                            <div class="title-cont">
                                <h4>Juan realizó una observación</h4>
                            </div>
                            <div class="cont-info">
                                <span>Se ha realizado una nueva observación al implemento con id <strong>21225522</strong>, ve a revisarla</span>
                            </div>
                            <div class="cont-ours">
                                <span>2h</span>
                            </div>
                        </div>
                        <div class="cont-fluid">
                            <div class="icon-flex">
                                <i class="fas fa-trash info-user" data-title="Eliminar notificación" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col s12 border-bottom p-0 rounded bg-white">
                    <div class="card-notification">
                        <div class="header-card-not">
                            <div class="imgs">
                                <img src="../../img/user.png" alt="Imagen de usuario">
                                <div class="cont-icon">
                                    <i class="fas fa-qrcode"></i>
                                </div>
                                <!-- SUB CUADRADO -->
                            </div>
                        </div>
                        <div class="body-card">
                            <div class="title-cont">
                                <h4>Juan realizó una observación</h4>
                            </div>
                            <div class="cont-info">
                                <span>Se ha realizado una nueva observación al implemento con id <strong>21225522</strong>, ve a revisarla</span>
                            </div>
                            <div class="cont-ours">
                                <span>2h</span>
                            </div>
                        </div>
                        <div class="cont-fluid">
                            <div class="icon-flex">
                                <i class="fas fa-trash info-user" data-title="Eliminar notificación" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col s12 border-bottom p-0 rounded bg-dark">
                    <div class="card-notification">
                        <div class="header-card-not">
                            <div class="imgs">
                                <img src="../../img/user.png" alt="Imagen de usuario">
                                <div class="cont-icon">
                                    <i class="fas fa-qrcode"></i>
                                </div>
                                <!-- SUB CUADRADO -->
                            </div>
                        </div>
                        <div class="body-card">
                            <div class="title-cont">
                                <h4>Juan realizó una observación</h4>
                            </div>
                            <div class="cont-info">
                                <span>Se ha realizado una nueva observación al implemento con id <strong>21225522</strong>, ve a revisarla</span>
                            </div>
                            <div class="cont-ours">
                                <span>2h</span>
                            </div>
                        </div>
                        <div class="cont-fluid">
                            <div class="icon-flex">
                                <i class="fas fa-trash info-user" data-title="Eliminar notificación" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
	</section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Developed by Montechelo - SENA &copy; </h5>
    </footer>
	<!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
