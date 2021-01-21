<?php
    //esta funcion redirige a las vistas designadas a cada rol
    function urlSessionUser(){
        if ($_SESSION['role']  == 1) {
            echo "<script>location.href='view/admin/home.php'</script>";
        }

        if ($_SESSION['role'] == 2) {
            echo "<script>location.href='view/visualizador/home.php'</script>";
        }
	}
?>