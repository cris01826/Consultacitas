<?php

	class Registro{
		public function registrar($datos){
			$c = new conectar();
			$conexion = $c->conexion();
			$sql="INSERT INTO `usuario`(`Documento`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `correo`, `Telefono`, `Contrasena`, `Rol`) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]')";
			return $result=mysqli_query($conexion,$sql);
		}
		
	}
