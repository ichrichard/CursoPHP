<?php 

class Conexion{

#se hace la funcion para conectar a la DB que se hizo y que se le pasa los parametros para conectar
	public function conectar(){

#-----Conexion a la base de datos, se crea la variable link que llama al PDO con los valores de la Base de datos (host, nombre, usuario de DBA y pass)
		$link = new PDO("mysql:host=localhost;dbname;cursophp","root","");
		#para hgacer el retorno en el archivo CRUD que se crea para hacer la ejecucuion.
		#var_dump($link);
		return $link;

	}


}
#hago la variable a que hace la conexion
#$a = new Conexion();
#y aqui con la variable a llamamos la funcion conectar
#comentare estas lineas por motivo de curso pero esto se mandara llamar despues en otro archivo
#$a -> conectar();

 ?>