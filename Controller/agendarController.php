<?php
		

	if(isset($_POST['submit'])){
		$docusuario = $_POST['docusu'];
		$docudoctor = $_POST['doctor'];
		$especialidad = $_POST['especialidad'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$nuevafecha=date("Y/m/d", strtotime($fecha));

		$datos=array(
			$docusuario,
			$docudoctor,
			$especialidad,
			$nuevafecha,
			$hora
		);

		$obj=new Agendamiento();
		if($obj->agendar($datos)==1){
				print "<script>alert(\"Cita Agendada.\");</script>";
		}else{
				echo '<div class="alert alert-danger">Cita no agendada</div>';
		}	
	}

?>