<?php  
/**
 * 
 */
class Custumer{
	
	function nuevoCustumer(){//Crear nuevo Usuario.
		if (empty($_POST['firtsname']) || empty($_POST['lastname']) || empty($_POST['age']) || empty($_POST['emailC']) || empty($_POST['passwordS'])) {
			//echo "campos vacios";
		}else{
			$resultado = (new CustumerModel) -> nuevoCustumerM($_POST['firtsname'], $_POST['lastname'], $_POST['age'] , strtolower($_POST['emailC']), $_POST['passwordS']);
			echo "".$resultado;	
		}
	}

	function ingresoController(){
	//lo de los corchetes de las respuestas hace referenciua a los ombres de las finals en la base de datos
		if ( empty($_POST['usuariolg']) || empty($_POST['passlg'])) {
			//echo "Varibles vacias";
		}else{
			
			$respuesta = (new CustumerModel) -> ingresoM($_POST['usuariolg'], $_POST['passlg']);
			if (strtolower($respuesta["email"]) == strtolower($_POST['usuariolg']) && $respuesta["password"] == $_POST['passlg']) {	
				echo "<span class='noti'>Salió</span>";
				if($_SESSION['usuario']){
					echo '<br>';
					header('Location: ?');
					}
			}else{
					echo "<span class='noti'>Verifique sus datos<br> ".$respuesta['email']."</span>";
					}
			}	
	}
}
?>