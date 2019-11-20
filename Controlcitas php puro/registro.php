<?php
require_once "php/conexion.php";
require_once "models/registroModel.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Registro</title>
</head>

<body>


    <form class="login2" action="" method="post">
        <h2>Registro</h2>
        <input type="text" name="documento" placeholder="Documento" class="form-control" required><br>
        <input type="text" name="nombre1" placeholder="Primer Nombre" class="form-control" required><br>
        <input type="text" name="nombre2" placeholder="Segundo Nombre" class="form-control" required><br>
        <input type="text" name="apellido1" placeholder="Primer Apellido" class="form-control" required><br>
        <input type="text" name="apellido2" placeholder="Segundo Apellido" class="form-control" required><br>
        <input type="email" name="correo" placeholder="Correo" class="form-control" required><br>
        <input type="text" name="telefono" placeholder="Telefono" class="form-control" required><br>
        <input type="password" name="clave" placeholder="Ingrese contraseña" class="form-control" required><br>
        <select class="form-control" name="rol" required>
            <option value="1">Paciente</option>
            <option value="2">Administrador</option>
        </select>
        <hr>
        <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
    </form>
<?php include 'Controller/registroController.php'; ?>

</body>

</html>