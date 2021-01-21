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
            <h2 class="title-principaly ml-1">Implementos</h2>
            <div class="ml-1 text-helper">
                <span class="pt-5">En esta sección podrás encontrar todos los implementos que se han cargado al sistema con la opción de descargarlos o ver la información a detalle.</span>
            </div>
            <div class="right-align show-only-desktop m-14">
                <button class="btn">Registrar</button>
            </div>
            <div class="fixed-action-btn show-only-phone">
                <a class="btn-floating btn-large color-primary">
                    <i class="fas fa-plus"></i>
                </a>
              </div> 
        </div>
        <div class="row">
            <table class="display table dataTable table-striped table-sm" cellspacing="0">
                <thead class="header-table">
                    <tr class="text-center">
                        <th class="th-sm">NOMBRE</th>
                        <th class="th-sm">DESCRIPCIÓN</th>
                        <th class="th-sm"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="colum1 colum1-stats">Computador Portatil</td>
                        <td class="colum2 colum2-stats">Computador Portatil Lenovo 14" - 8RAM - i7 9700k - NVIDIA 3080TI</td>
                        <td class="colum5 colum3-stats colum-icon-imp">
                            <a class="icon-table pr-2" href=""><i class="fas fa-eye info-title" data-title="Ver más"></i></a>
                            <a class="icon-table pr-2" href=""><i class="fas fa-download info-title" data-title="Descargar QR"></i></a>
                            <a class="icon-table pr-1" href=""><i class="fas fa-file-pdf info-user" data-title="Descargar reporte"></i></a>
                        </td>
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
