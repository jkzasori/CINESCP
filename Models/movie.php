<?php 
/**
 * 
 */
require_once("conection.php");
class MovieModel{
	function verMovie($idmovie){
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT * FROM movie where idmovie=?");
		$sqlt->bind_param("s", $idmovie);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		$Movie=$resul->fetch_array(MYSQLI_BOTH);
		return $Movie;	
	}
}
 ?>