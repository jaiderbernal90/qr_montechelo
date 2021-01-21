<?php 

function getUrlHome(){
    session_start();
    $role = $_SESSION['role'];
    $url = null;

    if($_SESSION['role'] == 1){
        $url = '<a href="admin/home.php" class="btn btn-actions btn-color-primary">Ir al inicio</a>';
    }else if($_SESSION['role'] == 2){
        $url = '<a href="visualizador/home.php" class="btn btn-actions btn-color-primary">Ir al inicio</a>';
    }


    return $url;

}

?>