<?php  
/**
 * 
 */
class Theater{
	function verTheater(){
		$respuesta = (new TheaterModel) -> verTheaterM();
		while ($v= $respuesta->fetch_array(MYSQLI_BOTH)) {
				echo '
				<tr>
                    <td class="center blueT">'.$v["name"].'</td>
                    <td class="center blueT">'.$v["full_address"].'</td>
                   	<td class="center colorHueso"><a type="" href="?action=cartelera&Tid='.$v["idtheater"].'"><i class="material-icons tiny">arrow_forward</i></a></td>
                </tr> ';
          }
	}
	function oneTheater(){//Regresa un teatro
		if (empty($_GET['Tid'])) {	
		}else{
			$idtheater=$_GET['Tid'];
			$theater = (new TheaterModel) -> oneTheaterM($idtheater);
			return $theater;
		}
	}
}
?>