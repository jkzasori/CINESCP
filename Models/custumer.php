<?php  
/**
 * 
 */
require_once("conection.php");
class CustumerModel{
	function nuevoCustumerM($firtsname, $lastname, $age, $emailC, $passwordS){
		$conect = new Conexion();
		$mysqli = $conect -> conectar();
		$mysqli -> set_charset('utf8');
		//primero se comprueba que el nombre  no exista y si no existe se realiza el registro
		$mysqlver = $mysqli->prepare("SELECT * FROM customer WHERE email=?");
		$mysqlver-> bind_param('s',$emailC);		
			//Ahora ejecutamos la consulta
		$mysqlver -> execute();
		$mysqlver -> store_result();
		if ($mysqlver->num_rows>0) {
			return "<br><span class='noti'>Error, el correo ya existe en el sistema. Intente con otro.<span>";
		}else{
			$mysql = $mysqli -> prepare("INSERT INTO customer(idcustomer, first_name, last_name, email, age, password) VALUES(NULL, ?, ?, ?, ?, ?)");
			$mysql-> bind_param('sssss',$firtsname, $lastname, $emailC, $age, $passwordS);
			if ($mysql -> execute()) {
				return "<br><span class='noti'>Registro Exitoso.</span>";
			}else{
					return "<br><span class='noti'>Error al Procesar el Registro.</span>";
				}
		}
	}

function ingresoM($emailC, $passwordS){
	 $conec = new Conexion();//
    $mysqlit=$conec->conectar();
    $mysqlit->set_charset('utf8');
	 if(!isset($_SESSION)) 
	    { 
	        session_start(); 
	    }
		if($sqlt = $mysqlit->prepare("SELECT * FROM customer WHERE email= ? AND password= ?"))
		{
			$sqlt -> bind_param("ss",$emailC ,$passwordS);
			//Ahora ejecutamos la consulta
			$sqlt -> execute();
			//obtenemos los resultados que nos arroja
			$resul=$sqlt->get_result();
				//echo "string ---".$emailC." ---".$passwordS."---";

				if ($resul->num_rows==1) {
					$datos=$resul->fetch_assoc();
				
					//Creamos variables de sesion para guardar todos los datos
					$_SESSION['usuario']=$datos;
					return $datos;
				}else{
					echo "<span class='noti'><br>No se puede conectar<br></span>";

				}
				
				$sqlt -> close();
		}
	}     
}
?>