<?php 
/**
 * 
 */
require_once("conection.php");
class ScoreModel{
	
	function addScoreM($quantity, $idcartelera, $idcustomer){
		$conect = new Conexion();
		$mysqli = $conect -> conectar();
		$mysqli -> set_charset('utf8');
		//primero se comprueba que el nombre  no exista y si no existe se realiza el registro
		$mysqlver = $mysqli->prepare("SELECT * FROM score WHERE idcartelera=? and idcustomer=?");
		$mysqlver-> bind_param('ii',$idcartelera, $idcustomer);		
			//Ahora ejecutamos la consulta
		$mysqlver -> execute();
		$mysqlver -> store_result();
		if ($mysqlver->num_rows>0) {
			return "<span class='text-movie'>Error, Ya usted realizó la puntuación para la película seleccionada.</span>";
		}else{
				$mysql = $mysqli -> prepare("INSERT INTO score(idscore, idcartelera, idcustomer, quantity) VALUES(NULL, ?, ?, ?)");
				$mysql-> bind_param('iii',$idcartelera, $idcustomer, $quantity);
				if ($mysql -> execute()) {
					return "<span class='text-movie'>Puntuación exitosa.</span>";
				}else{
						return "<span class='text-movie'>Error al Procesar el registro de la Puntuación.</span>";
					}
			}
	}
	function verScoreM($idcartelera){//trae score por peliculas y teatro
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT sum(quantity), count(quantity) FROM score where idcartelera=?");
		$sqlt->bind_param("i", $idcartelera);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		$Score=$resul->fetch_array(MYSQLI_BOTH);
		return $Score;	
	}
	function oneScoreM($idcustomer){//trae score por customer
		$conec = new Conexion();//
	  	$mysqlit=$conec->conectar();
	  	$mysqlit->set_charset('utf8');
		$sqlt = $mysqlit->prepare("SELECT idcartelera, quantity FROM score where idcustomer=?");
		$sqlt->bind_param("i", $idcustomer);
		//Ahora ejecutamos la consulta
		$sqlt -> execute();
		//obtenemos los resultados que nos arroja
		$resul=$sqlt->get_result();
		return $resul;	
	}
}
 ?>