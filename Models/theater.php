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
	function oneTheaterM($idtheater){
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT * FROM theater where idtheater=?");
		$sqlt->bind_param("s", $idtheater);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		$Theater=$resul->fetch_array(MYSQLI_BOTH);
		return $Theater;	
		}

}
?>