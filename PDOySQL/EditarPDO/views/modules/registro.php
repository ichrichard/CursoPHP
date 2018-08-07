<h1>REGISTRO DE USUARIO</h1>

<!--metodo post es para mandar informacion de manera interna en PDO no necesita la opcion action, es importante usar en el inpute el name  ya que esto sera la variable y el atributo value es lo que se guardara-->
<form method="post" >
	
	<input type="text" placeholder="Usuario" name="usaurio" required>

	<input type="password" placeholder="Contraseña" name="password" required>

	<input type="email" placeholder="Email" name="email" required>

	<input type="submit" value="Enviar">

</form>

<?php 
	$registro = new mvcController();
	$registro -> registroUsuarioController();
	
	if(isset($_GET["action"])){
		if ($_GET["action"] == "ok") {
			echo "Registro Exitoso";
		}
	}

 ?>