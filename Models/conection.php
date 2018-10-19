<?php
class Conexion{
	public function conectar(){
		
		$mysqli = new mysqli('localhost','root','','scpelementos43');
		return $mysqli;
	}
	
}

?>