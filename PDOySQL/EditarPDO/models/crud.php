<?php 

require_once "conexion.php";

#cuando necesitamos un objeto de otra clase pueden ser extendidos, y pueden heredar propiedades y metodos. para definirla como extension se define la clase padre que en este caso es la clase Conexion y se utiliza dentro de una hija que es Datos


	class Datos extends Conexion{

		#registro de usuarios
#esta funcion tiene dos parametros para ver la tabla y los datos
		public function registroUsuarioModel($datosModel, $tabla){

#prepare()prepara la sentencia SQL para ejecutar por el metodo PDOStatement::execute(). la sentencia SQL puede contener cero o mas marcadores de parametros con nombre (:name) o signos de interrogacion (?) por los cuales los valores reales seran sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parametros

			#se agrega la sentencia SQL dentro del prepare

 			#$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usaurio, password, email) VALUES (:usuario,:password,:email)");

 			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, password, email) VALUES (?,?,?)");

 #binParam() vincula lo que viene en una variable PHP a un parametro de susticion con nombre o de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia

 			$stmt->bindParam("?",$datosModel["usuario"], PDO::PARAM_STR);
 			$stmt->bindParam("?",$datosModel["password"], PDO::PARAM_STR);
 			$stmt->bindParam("?",$datosModel["email"], PDO::PARAM_STR);

			if($stmt->execute()){
 				return "success";
 			}else{
 				return "error";
 			}
 			$stmt->close();

	}

}


?>