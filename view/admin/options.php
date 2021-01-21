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
            <h2 class="title-principaly ml-1">Configuraciones</h2>
        </div>

        <div id="op" class="container-fluid center-align row">
            <div class="col s12 m6 aling-right-response">
                <button id="click2" class="btn btn-actions btn-color-secundary">
                    <i class="fas fa-image"></i> Imagen
                </button>
            </div>
            <div class="col s12 m6 aling-left-response">
                <button id="click" class="btn btn-actions btn-color-secundary p-48">
                    <i class="fas fa-key"></i> Contraseña
                </button> 
            </div>
        </div>
    

    <div id="img" class="container-fluid mt-5 mb-3">
        <form action="../../controller/admin/update/updatePhoto.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-5">
                <div class="col s12">
                    <p class="title-cont pl-3">Seleccione su foto de perfil</p>
                    <div class="pl-3">
                        <span >Completa el formulario para cambiar tu foto de perfil</span>
                    </div>
                    <div class="file-upload center-align">
                        <img src="../../img/<?php echo $_SESSION['img_profile']; ?>" alt="" id="mostrarimagen" class="img-change shadow">
                             <input type="file" name="img_profile" id="code" class="input-file file" accept=".png, .jpeg, .jpg, image/gif" required >
                             <label for="code" id="fileName" class="mt-3">Ningun archivo seleccionado</label>
                    </div>
                </div>
            </div>
            <div class="center-align">
                <button type="submit" class="btn btn-actions btn-color-primary mt-1" >Guardar</button>
            </div>
        </form>
    </div>
    
    <div id="paass" class="container-fluid">
        <form class="login100-form validate-form container-fluid mt-5" action="../../controller/admin/update/updatePass.php" method="POST">
            <p class="title-cont pl-3">Actualización de contraseña</p>
            <div  class="pl-3">
                <span>Completa el formulario para cambiar tu contraseña</span>
            </div>
            <div class="row">
                <div class="col s12 ">
                    <div class="md-form mt-0 pl-3">
                        <p class="f-weight-500">Contraseña Anterior</p>
                        <i class="fas fa-lock prefix p-absolute"></i>
                        <input placeholder="Contraseña anterior" type="password" class="form-control" required=""  id="input-contraseña1" autocomplete="off" name="passan" title="Campo Requerido">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="md-form mt-0 pl-3">
                        <p class="f-weight-500">Nueva Contraseña</p>
                        <i class="fas fa-lock prefix p-absolute"></i>
                        <input placeholder="Nueva contraseña" type="password"  class="form-control" required="" id="input-contraseña2" autocomplete="off"  name="passnu" title="Campo Requerido">
                    </div>
                </div>
            </div><br>

            <div class="center-align">
                <button type="submit" class="btn btn-actions btn-color-primary">
                    <i class=""></i> Guardar
                </button>
            </div>
        </form>
    </div>
    </section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Developed by Montechelo - SENA &copy; </h5>
    </footer>
     <!-- JQUERY :/ -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/option.js"></script>
    <script type="text/javascript" src="../../js/disabled.js"></script>
    <script type="text/javascript" src="../../js/file-input.js"></script>
    <script type="text/javascript" src="../../js/photo.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
