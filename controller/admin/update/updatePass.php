<?php
   require_once('../../../model/conexion/conexion.php');
   require_once('../../../model/query/admin/queryAdmin.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');
   
   session_start();
   $email=$_SESSION['email'];
   $passActual = $_SESSION['password'];
   $userPassAct = trim($_POST['passan']);
   $EncryptPass=md5($userPassAct);
   $newPass = trim($_POST['passnu']);
   // $confirmNewPass = trim($_POST['passnure']);

   $acceptPassword=validationPassword($newPass);
   
   if ($acceptPassword===true) {
      if (strlen($EncryptPass)>0 && strlen($newPass)>0 && strlen($userPassAct)>0 ){
            if ($EncryptPass === $passActual) {
                     $comprobarPass = strlen($newPass);
                     if ($comprobarPass>7) {
                        $password = md5($newPass);
                        if($password != $passActual){
                           $consultas = new consultas();
                           $result=$consultas->updatePass($password,$email);
                        }else{
                           modalAlert('LA NUEVA CONTRASEÑA NO PUEDE SER IGUAL QUE LA ANTERIOR' , '../../../view/admin/options.php' , 'warning' , '3');
                        }
                     }else{
                        modalAlert('LA CONTRASEÑA DEBE TENER AL MENOS 8 DIGITOS' , '../../../view/admin/options.php' , 'warning' , '3');
                     } 
            }else{
               modalAlert('LA CONTRASEÑA ACTUAL ES INCORRECTA' , '../../../view/admin/options.php' , 'warning' , '3');
            }    
      }else {
         modalAlert('LLENE TODOS LOS CAMPOS' , '../../../view/admin/options.php' , 'warning' , '3');
      }
   }else{
      modalAlert('CARACTERES NO VALIDOS' , '../../../view/admin/options.php' , 'warning' , '3');
   }
?>