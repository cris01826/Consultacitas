<?php

	if (isset($_POST['submit'])) {
		$user = $_POST['usuari'];
		$pass = $_POST['clave'];

		if(empty($user) || empty($pass)){
			echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
		}else{
			$metodos = new metodos;

			if($metodos->login($user,$pass)){
				session_start();
				$_SESSION['usuario'] = $user;
				header('location: ../inicio.php');
			}else{
				echo '<div class="alert alert-danger">Usuario no existe</div>';
			}
		}
	}

?>