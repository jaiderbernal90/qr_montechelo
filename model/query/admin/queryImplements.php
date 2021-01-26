<?php  
	class queryImplements{
		public function showImplementsTable(){//Funcion para consultar usuarios
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT id,name_implements,description_implements FROM implements"; 
			$result = $conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}

			return $resultado;
		}//Cierre ver usuarios

		public function registerImplements($name, $marc_implement, $state, $serial, $type_implement, $ip, $description, $fech_register){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "INSERT INTO implements(name_implements, brand_implements, state, serial, type_implements, description_implements, ip, date_creation) VALUES(:name, :marc_implement, :state, :serial, :type_implement, :description, :ip, :date_register)";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":name", $name);
			$result->bindParam(":marc_implement", $marc_implement);
			$result->bindParam(":state", $state);
			$result->bindParam(":serial", $serial);
			$result->bindParam(":type_implement", $type_implement);
			$result->bindParam(":ip", $ip);
			$result->bindParam(":description", $description);
			$result->bindParam(":date_register", $fech_register);

			
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL REGISTRAR','../../../view/admin/registerImplements.php','error',3);
			}else {		
				$result->execute();
			
				createQR($conexion->lastInsertId(),$name);
				modalAlertImplements('IMPLEMENTO REGISTRADO','../../../view/admin/implementos.php','success',3,$conexion->lastInsertId(),$name,$fech_register);
        	}
		}
		public function showImplementsView($id){
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM implements WHERE id=:id"; 
			$result = $conexion->prepare($sql);
			$result->bindParam(":id", $id);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}

			return $resultado;

		}

		public function insertURL($name,$id){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "UPDATE implements SET url_image=:url_image WHERE id=:id";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id", $id);
			$result->bindParam(":url_image", $name);
						
			$result->execute();
		
		}



	}//Cierre clase consultas

?>