<?php  
/**
 * 
 */
class Theater{
	
	// function nuevoTheater(){//Crear nuevo Usuario.
	// 	if (empty($_POST['Theater']) || empty($_POST['address'])) {
	// 		//echo "campos vacios";
	// 	}else{
	// 		$resultado = (new TheaterModel) -> nuevoTheaterM($_POST['Theater'], $_POST['address']);
	// 		echo "".$resultado;	
	// 	}
	// }

	function verTheater(){
		$respuesta = (new TheaterModel) -> verTheaterM();

		while ($v= $respuesta->fetch_array(MYSQLI_BOTH)) {

				echo '
				<tr>
                    <td class="center blueT">'.$v["name"].'</td>
                    <td class="center blueT">'.$v["full_address"].'</td>
                </tr>';

          }
	}
}
?>