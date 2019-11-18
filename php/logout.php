<?php
	require_once "conexion.php";
	session_start();
	session_destroy();
	header("Location: ../index.php")
?>