<?php
session_start();

if (isset($_SESSION['usuario'])) {

	?>

	<?php include 'html/header.php'; ?>


	<!-- Navbar -->
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand">Control de Citas</a>
		<form class="form-inline">
			<p class="form-usuario">Usuario: <?php echo $_SESSION['usuario']; ?></p>
			<a href="php/logout.php" class="btn btn-outline-primary my-2 my-sm-0">Cerrar sesion</a>
		</form>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 colum">
				<h4 class="titulo">Datos paciente</h4><br>

				<?php
					$sql = "SELECT * FROM usuario WHERE documento = $_SESSION[usuario]";
					$obj = new agendamiento();
					$datos = $obj->mostrarDatos($sql);
					foreach ($datos as $key) { ?>

					<h5>Documento: <?php echo $key['Documento']; ?></h5>
					<h5>Nombres: <?php echo $key['Primer_Nombre'] . " " . $key['Segundo_Nombre']; ?></h5>
					<h5>Apellidos: <?php echo $key['Primer_Apellido'] . " " . $key['Segundo_Apellido']; ?></h5>
					<h5>Telefono: <?php echo $key['Telefono']; ?></h5>
					<h5>Correo: <?php echo $key['correo']; ?></h5>



				<?php } ?>


				<?php include 'html/modal.php'; ?>
			</div>
			<div class="col-md-6 col-lg-6 colum">
				<h4 class="titulo">Asignacion Cita</h4>
				<br>
				<form action="" method="post">
					<input type="hidden" name="docusu" value="<?php echo $_SESSION['usuario']; ?>">
					<label>
						<h5>Seleccione una especialidad</h5>
						<select class="form-control tamaño" name="especialidad">
							<option>Seleccionar</option>
							<?php
								$sql = "SELECT * FROM especialidad";
								$obj = new agendamiento();
								$datos = $obj->mostrarDatos($sql);
								foreach ($datos as $key) { ?>
								<option value="<?php echo $key['Especialidad']; ?>"><?php echo $key['Especialidad']; ?></option>
							<?php
								}
								?>
						</select>
					</label><br>
					<label>
						<h5>Seleccione un doctor</h5>
						<select class="form-control tamaño" name="doctor">
							<option>Seleccionar</option>
							<?php
								$sql = "SELECT * FROM doctor";
								$obj = new agendamiento();
								$datos = $obj->mostrarDatos($sql);
								foreach ($datos as $key) { ?>
								<option value="<?php echo $key['Documento']; ?>"><?php echo $key['Primer_Nombre'] . " " . $key['Segundo_Nombre'] . " " . $key['Primer_Apellido'] . " " . $key['Segundo_Apellido']; ?></option>
							<?php
								}
								?>
						</select>
					</label><br>
					<label>
						<h5>Seleccione una fecha</h5>
						<input type="date" name="fecha" class="form-control form-control2">
					</label><br>
					<label>
						<h5>Seleccione una hora</h5>
						<select class="form-control tamaño" name="hora">
							<option>Selecionar</option>
							<option>08:00 AM</option>
							<option>09:00 AM</option>
							<option>10:00 AM</option>
							<option>11:00 AM</option>
							<option>12:00 MM</option>
							<option>01:00 PM</option>
							<option>02:00 PM</option>
							<option>03:00 PM</option>
							<option>04:00 PM</option>
							<option>05:00 PM</option>
						</select>
					</label><br>
					<button type="submit" class="btn btn-outline-primary" name="submit" data-toggle="modal" data-target="#exampleModal">Agendar Cita</button>
				</form>
				<?php include 'Controller/agendarController.php'; ?>
			</div>
		</div>
	</div>


	<?php include 'html/footer.php'; ?>
<?php
} else {
	header("Location: index.php");
}

?>