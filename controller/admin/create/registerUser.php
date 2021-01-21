<?php
   require_once('../../../model/conexion/conexion.php');
   require_once('../../../model/query/admin/queryAdmin.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');

   //DEFINIR ZONA HORARIA
   date_default_timezone_set('America/Bogota');

   //Variables
   $name = trim($_POST['name']);
   $type_id = trim($_POST['type_id']);
   $document = trim($_POST['document']);
   $email = trim($_POST['email']);
   $state = 1;
   $role = trim($_POST['role']);
   $pass = $document.substr($name, 0, 1).'+';
   $password = md5($pass);
   $img_profile = 'user.png';
   $fech_register = date("Y-m-d H:i:s");

   $sqlInjection = $name . $type_id . $document . $email . $state . $role;

   $acceptSql = sql_injection($sqlInjection);

   $acceptEmail = validationEmail($email);

   if ($acceptEmail === true) {
      if ($acceptSql === true) {
         //Validation
         if (strlen($name)>0 && strlen($type_id)>0 && strlen($document)>0 && strlen($email)>0 && strlen($state)>0 && strlen($role)>0 && strlen($pass)>0 && strlen($img_profile)>0 && strlen($fech_register)>0) {

               $consultas=new consultas();

               $result=$consultas->registerUser($name, $type_id, $document, $email, $state, $role, $password, $img_profile, $fech_register);
         }else {
            modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/registerUser.php','warning',3);
         }
      }else{
         modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/registerUser.php','warning',3);
      }
   }else{
      modalAlert('CORREO NO VALIDO','../../../view/admin/registerUser.php','warning',3);
   }
?>