<?php 
require_once('../../../model/conexion/conexion.php');
require_once('../../../model/query/admin/queryimplements.php');
require_once('../../modales/modal.php');
require_once('../../sessions/security/verification.php');
require_once('createQRegister.php');


//DEFINIR ZONA HORARIA
date_default_timezone_set('America/Bogota');

// VARIABLES
$name = trim($_POST['name_implement']);
$marc_implement = trim($_POST['marc_implement']);
$state = trim($_POST['state']);
$serial = trim($_POST['serial']);
$type_implement = trim($_POST['type_implement']);
$ip = trim($_POST['ip']);
$description = trim($_POST['description']);
$fech_register = date("Y-m-d H:i:s");



$sqlInjection = $name . $marc_implement . $state . $serial . $type_implement . $ip;


$acceptSql = sql_injection($sqlInjection);

if ($acceptSql === true) {
    //Validation
    if (strlen($name)>0 && strlen($marc_implement)>0 && strlen($state)>0 && strlen($serial)>0 && strlen($type_implement)>0 && strlen($description)>0 ) {

            $consultas = new queryImplements();

            $result=$consultas->registerImplements($name, $marc_implement, $state, $serial, $type_implement, $ip, $description, $fech_register);
    }else {
         modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/registerImplements.php','warning',3);
    }
}else{
    modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/registerImplements.php','warning',3);
}




?>