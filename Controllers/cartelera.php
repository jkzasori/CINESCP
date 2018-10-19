<?php 
/**
 * 
 */
class Cartelera{
	
	function verCartelera(){
		if (empty($_GET['Tid'])) {
			
		}else{
			$idtheater=$_GET['Tid'];
			$respuesta = (new CarteleraModel) -> verCarteleraM($idtheater);
			while ($v= $respuesta->fetch_array(MYSQLI_BOTH)) {
				$Movie = (new MovieModel) -> verMovie($v["idmovie"]);
   
				echo '<tr>
						<td class="text-left Shadow">
							<br><span class="text-movie">Name:</span> '.$Movie["name"].'
							<br><span class="text-movie">Type:</span> '.$Movie["type"].'
							<br><span class="text-movie">Description:</span> <p>'.$Movie["description"].'</p>
							<span class="text-movie">Score:</span> 
						</td>
					</tr>';
          	}
		}
	}
}
 ?>