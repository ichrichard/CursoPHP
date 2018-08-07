<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}


	#REGISTRO de usuarios_--------------------------------

	public function registroUsuarioController(){

#hacemos una variable array para almacenar los datos del POST que viene de Registro.php
	
	    if(isset($_POST["usuario"])){	
   
		    $datosController = array("usuario"=>$_POST["usuario"],
						         	 "password"=>$_POST["password"],
						         	 "email"=>$_POST["email"]);
#aqui recibe los datos del array y los almacene en la tabla usaurio
		       $respuesta = Datos::registroUsuarioModel($datosController, "usuarios");
		        
#de esta manera evitamos que se sigan insertando registros al refrescar la pagina al regresar la pagina en blanco
		        if($respuesta == "success"){

		        	header("location:index.php?action=ok");
          }else{

          	header("location:index.php");
          }

	    }
     
     }

}

?>