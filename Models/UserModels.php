<?php
  	
  	class metodos extends conectar{

  		public function login($user,$pass){

			$sql = "SELECT * FROM usuario WHERE documento = '$user' AND contrasena = '$pass'";

			$result = $this->conexion()->query($sql);
			$numRows = $result->num_rows;

			if($numRows == 1){
				return true;
			}

			return  false;
  		}
  		
  	}





?>