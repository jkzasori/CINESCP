<?php
/**
* 
*/
require_once("conection.php");

class TheaterModel{

	function verTheaterM(){
		$conec = new Conexion();//
	  $mysqlit=$conec->conectar();
	  $mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT * FROM theater order by idtheater desc");		
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		return $resul;	
		$sqlt -> close();	
	}

}
?>