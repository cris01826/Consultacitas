<?php
session_start();
include 'php/conexion.php';
include 'Models/UserModels.php';
include 'Controller/userController.php';

if (isset($_SESSION['usuario'])) {
  header('location: inicio.php');
}


?>
<!DOCTYPE html>
<html lang="es
">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <title>Inicio</title>
</head>

<body>
  <form class="login" action="" method="post">
    <h2>Iniciar sesion</h2>
    <input type="text" name="usuari" placeholder="Ingrese Documento" class="form-control"><br>
    <input type="password" name="clave" placeholder="Ingrese contraseña" class="form-control"><br>
    <a href="registro.php"><small>Registro</small></a><br>
    <hr>
    <button type="submit" name="submit" class="btn btn-primary">Ingresar</button>
  </form>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>