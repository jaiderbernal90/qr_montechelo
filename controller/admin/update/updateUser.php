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
   $role = trim($_POST['role']); 
   $date_update = date("Y-m-d H:i:s");

   $sqlInjection = $name . $type_id . $document . $email . $role;
   // echo $name . $type_id . $document . $email . $role . $date_update;

   $acceptSql = sql_injection($sqlInjection);

   $acceptEmail = validationEmail($email);

   if ($acceptEmail === true) {
      if ($acceptSql === true) {
         //Validation
         if (strlen($name)>0 && strlen($type_id)>0 && strlen($document)>0 && strlen($email)>0 && strlen($role)>0) {

               $consultas=new consultas();

               $result=$consultas->updateUser($name, $type_id, $document, $email, $role, $date_update);
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