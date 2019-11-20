<?php

if(isset($_POST['submit'])){
		$documento = $_POST['documento'];
		$nombre1 = $_POST['nombre1'];
		$nombre2 = $_POST['nombre2'];
		$apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $clave = md5($_POST['clave']);
        $rol = $_POST['rol'];
		

		$datos=array(
			$documento,
			$nombre1,
			$nombre2,
			$apellido1,
            $apellido2,
            $correo,
            $telefono,
            $clave,
			$rol
		);

		$obj=new Registro();
		if($obj->registrar($datos)==1){
				print "<script>alert(\"Registro Exitoso.\");</script>";
                header("Location: index.php");
		}else{
				echo '<div class="alert alert-danger">No se Guardo el Registro</div>';
		}	
	}
