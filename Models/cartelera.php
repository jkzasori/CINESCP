<?php 
/**
 * 
 */
require_once("conection.php");
class CarteleraModel{
	
	function verCarteleraM($idtheater){
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT * FROM cartelera where idtheater=? order by idcartelera desc");
		$sqlt->bind_param("s", $idtheater);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		return $resul;	
		}
	function oneCarteleraM($idcartelera){
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT * FROM cartelera where idcartelera=?");
		$sqlt->bind_param("i", $idcartelera);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		$cartelera=$resul->fetch_array(MYSQLI_BOTH);
		return $cartelera;	
		}
}
 ?>