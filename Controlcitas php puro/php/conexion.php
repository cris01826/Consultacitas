<?php

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $password = "";
	private $bbdd = "controlcitas";

	public function conexion(){
		$conexion=mysqli_connect($this->servidor,
		                         $this->usuario,
		                         $this->password,
		                         $this->bbdd);
		return $conexion;
	}
}