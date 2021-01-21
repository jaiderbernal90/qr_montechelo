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
        <!-- DATATABLE -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <!-- ICON -->
        <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
        <!-- LOCAL CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/table.css">
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
            <h2 class="title-principaly ml-1">Estadísticas</h2>
        </div>
        <div class="row d-flex">
           <div class="col s3 right-align p-0 ml-auto ">
               <div class="qr-cont">
                    <img src="../../img/qr.png" alt="QR code" class="img-qr d-flex">
               </div>
           </div>
           <div class="col s8 mr-5">
                <div class="title-second">
                    <h5>Nombre implemento</h5>
                    <span class="span">Marca</span>
                </div>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, reiciendis dolorem! Quasi, beatae, voluptate dolorum reprehenderit ea eos laudantium, provident quam nulla ullam facere iure aliquam eum cum molestiae nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, reiciendis dolorem! Quasi, beatae, voluptate dolorum reprehenderit ea eos laudantium, provident quam nulla ullam facere iure aliquam eum cum molestiae nam.</p>
                </div>
           </div>
        </div>  
        <div class="row">
            <div class="col s10 title-divider m-auto ml-2">
                <h5>Historial</h5>
                <div class="divider"></div>
            </div>
        </div> 
        <div class="row">
            <div class="col s12 d-flex options">
                <div class="col s6 left-align ml-3 mt-2">
                    <span>3 Observaciones, 2 veces leído y 1 vez descargado</span>
                </div>
                <div class="col s6 right-align mr-3"> 
                   <a href="observaciones.php"> <button type="button" class="btn btn-actions btn-color-secundary mt-0 btn-special">Ver observaciones</button> </a>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="display table dataTable table-striped table-sm" cellspacing="0">
                <thead class="header-table">
                    <tr class="text-center">
                        <th class="th-sm">USUARIO</th>
                        <th class="th-sm">FECHA</th>
                        <th class="th-sm">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="colum1 colum1-stats">Juan Perez</td>
                        <td class="colum2 colum3-stats">Hoy</td>
                        <td class="colum2 colum3-stats">Leyó</td>
                    </tr>
                </tbody>
                <!-- PREV
                <i class="fas fa-chevron-left"></i> 
                 NEXt
                <i class="fas fa-chevron-right"></i> -->
            </table>
        </div>
    </section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Developed by Montechelo - SENA &copy; </h5>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- JQUERY :/ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- DATATABLE JS -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/table.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
