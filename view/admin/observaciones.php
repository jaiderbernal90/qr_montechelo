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
        <div class="row mt-phone-1 m-auto-phone">
            <div class="col s12 ml-1 ml-1-phone">
                <a href="infoQR.php" class="btn btn-actions btn-color-primary btn-phone">Volver</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 ml-1 ml-1-phone">
                <h2 class="title-principaly mt-0-phone">Observaciones / Nombre / ID</h2>
            </div>
        </div>
        <div class="row m-auto-phone">
            <div class="col s12 m6 ml-1 ml-1-phone flex-center">
                <div class='input-field w-50'>
                    <input id='searchs' type='text' class='validate'>
                    <label for='searchs' class='label-text'>Buscar </label>
                </div>
            </div>
            <div class="col s12 m6 d-flex-end flex-center">
                <div class="input-field w-50">
                    <div>
                        <label class="prefix-label">Filtrar</label>
                    </div>
                    <select class="browser-default seleccionar">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="1">Más recientes</option>
                        <option value="2">Más Antiguos</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row pl-phone">
            <div class="container-observations">
                <div class="row border-bottom mb-0">
                    <!-- OBSERVATIONS USER -->
                    <div class="col s12 mb-2 w-100 cont-observation">
                        <header class="col s12">
                            <a class="m-auto">
                                <div class="d-flexbox mt-3 mb-0-5">
                                    <img src="../../img/undraw_profile_pic_ic5t.svg" alt="" class="img-responsive avatar-pub rounded-circle " alt="Noticia">
                                    <div class="w-100">
                                        <span class="title-user">Pawel Kadish</span>
                                        <span class="font-ours d-block">Hace 3 días</span>
                                    </div>
                                </div>
                            </a>
                        </header>
                        <article>
                        <div class="card-body-pub">
                            <div class="desc-card">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias porro nesciunt ipsam aliquam facere delectus doloribus, totam natus vero. Quaerat vitae inventore molestias animi ipsum totam mollitia molestiae perspiciatis repellendus.</p>
                            </div>
                            <div class="evidence-observations">
                                <img src="../../img/electronic-scrap-944452_1280.jpg" alt="Evidencia de una observación" class="img-responsive mr-1">
                                <img src="../../img/electronic-scrap-944452_1280.jpg" alt="Evidencia de una observación" class="img-responsive mr-1">
                            </div>
                        </div>
                        </article>
                    </div>
                </div>
                <div class="row border-bottom mb-0 ">
                    <!-- OBSERVATIONS USER -->
                    <div class="col s12 mb-2 w-100 cont-observation">
                        <header class="col s12">
                            <a class="m-auto">
                                <div class="d-flexbox mt-3 mb-0-5">
                                    <img src="../../img/undraw_profile_pic_ic5t.svg" alt="" class="img-responsive avatar-pub rounded-circle " alt="Noticia">
                                    <div class="w-100">
                                        <span class="title-user">Pawel Kadish</span>
                                        <span class="font-ours d-block">Hace 3 días</span>
                                    </div>
                                </div>
                            </a>
                        </header>
                        <article>
                        <div class="card-body-pub">
                            <div class="desc-card">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias porro nesciunt ipsam aliquam facere delectus doloribus, totam natus vero. Quaerat vitae inventore molestias animi ipsum totam mollitia molestiae perspiciatis repellendus.</p>
                            </div>
                            <div class="evidence-observations">
                                <img src="../../img/electronic-scrap-944452_1280.jpg" alt="Evidencia de una observación" class="img-responsive mr-1">
                                <img src="../../img/electronic-scrap-944452_1280.jpg" alt="Evidencia de una observación" class="img-responsive mr-1">
                            </div>
                        </div>
                        </article>
                    </div>
                </div>
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
