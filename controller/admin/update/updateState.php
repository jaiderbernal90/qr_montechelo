<?php 
    require_once('../../../model/conexion/conexion.php');
    require_once('../../../model/query/admin/queryAdmin.php');
    require_once('../../../model/query/admin/ajax/ajaxUser.php');


    function updateState(){
        $action = $_POST['action'];
        $id = $_POST['id'];
        $response = null;
      
  
        if($action === 'deshabilitar'){
          $state=0;
          $queries = new ajaxUser();
          //Genera consulta para dehabilitar el usuario
          $result=$queries->updateStateUser($id,$state);
          $response = 'deshabilitar';
        }else if($action === 'habilitar'){
            $state=1;
            $queries = new ajaxUser();
            //Genera consulta para dehabilitar el usuario
            $result=$queries->updateStateUser($id,$state);
            $response = 'habilitar';
        }
      return $action;
    }

    echo updateState();
?>