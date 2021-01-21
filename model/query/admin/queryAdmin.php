<?php  
	class consultas{
		public function showUsers(){//Funcion para consultar usuarios
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM user"; 
			$result = $conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}

			return $resultado;
		}//Cierre mirar usuarios

		//Funcion para añadir usuarios
		public function registerUser($name, $type_id, $document, $email, $state, $role, $password, $img_profile, $fech_register){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "INSERT INTO user(full_name, type_id, document, email, state, role, password, img_profile, date_register) VALUES(:full_name, :type_id, :document, :email, :state, :role, :password, :img_profile, :date_register)";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":full_name", $name);
			$result->bindParam(":type_id", $type_id);
			$result->bindParam(":document", $document);
			$result->bindParam(":email", $email);
			$result->bindParam(":state", $state);
			$result->bindParam(":role", $role);
			$result->bindParam(":password", $password);
			$result->bindParam(":img_profile", $img_profile);
			$result->bindParam(":date_register", $fech_register);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL REGISTRAR','../../../view/admin/registerUser.php','error',3);
			}else {		
				$result->execute();
				modalAlert('USUARIO REGISTRADO','../../../view/admin/users.php','success',3);
        	}
	  	}//Cierra insertarUsuarios

	  	public function userInfo($id){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM user WHERE id_user = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}

		public function updateUser($name, $type_id, $document, $email, $role,$date_update){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET full_name=:full_name, type_id=:type_id, document=:document, email=:email, role=:role,date_modification=:date_modification WHERE document=:document";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":full_name",$name);			
			$result->bindParam(":type_id",$type_id);
			$result->bindParam(":document",$document);			
			$result->bindParam(":email",$email);			
			$result->bindParam(":role",$role);
			$result->bindParam(":date_modification",$date_update);

			
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL MODIFICAR' , '../../../view/admin/infoUser.php' , 'warning' , '3');
			}else {	
				$result->execute();
				modalAlert('ACTUALIZACION EXITOSA' , '../../../view/admin/users.php' , 'success' , '3');
			}
		}

		public function updatePhoto($img_profile,$email){
			
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "UPDATE user SET img_profile=:img_profile WHERE email=:email";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":img_profile",$img_profile);
			$result->bindParam(":email",$email);

			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL ACTUALIZAR LA FOTO' , '../../../view/admin/options.php' , 'warning' , '3');
			}else {	
				$result->execute();
				modalAlert('SE ACTUALIZÓ SU FOTO EXITOSAMENTE' , '../../../view/admin/options.php' , 'success' , '3');

			}
		}//Cierra imagen

		public function updatePass($password,$email){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET password=:password WHERE email=:email";
	
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":password",$password);
			$result->bindParam(":email",$email);
			
	
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL MODIFICAR','../../../view/admin/options.php','error',3);
			}else {
				
				$result->execute();
				modalAlert('CONTRASEÑA MODIFICADA EXITOSAMENTE','../../../view/admin/options.php','success',3);
			}
		}//Cierra actualizar contraseña

	}//Cierre clase consultas
?>