<?php 

 class ajaxUser{

    public function updateStateUser($id,$state){
            //CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET state=:state WHERE id_user=:id_user";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":state",$state);			
			$result->bindParam(":id_user",$id);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL MODIFICAR' , '../../../view/admin/infoUser.php' , 'warning' , '3');
			}else {	
				$result->execute();
			}
    }


 }


?>