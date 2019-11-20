<?php

	class Agendamiento  {
		public function agendar($datos){
			$c = new conectar();
			$conexion = $c->conexion();
			$sql="INSERT INTO `cita`(`DocuUsuario`, `DocuDoctor`, `Tipo_de_cita`, `Fecha_cita`, `Hora_cita`) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
			return $result=mysqli_query($conexion,$sql);
		}
		public function mostrarDatos($sql){
			    $c = new conectar();
				$conexion = $c->conexion();
				
				$result=mysqli_query($conexion,$sql);
				return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
	}
