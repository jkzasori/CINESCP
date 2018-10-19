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
				$score = (new ScoreModel) -> verScoreM($v["idcartelera"]);
				$num=$score["count(quantity)"];
				$quantity=$score["sum(quantity)"];
				if ($num==0) {
					$score["sum(quantity)"]=0;
				}else{
					$quantity=$quantity/$num;
				}
				echo '<tr>
						<td class="text-left Shadow">
							<br><span class="text-movie">Name:</span> '.$Movie["name"].'
							<br><span class="text-movie">Score:</span> '.$quantity.' (Votos '.$num.')
							<br><span class="text-movie">Type:</span> '.$Movie["type"].'
							<br><span class="text-movie">Description:</span> <p>'.$Movie["description"].'</p>';
		    			   if(isset($_SESSION['usuario'])){ 
		          				echo '<span class="text-movie">Puntuar: </span>
		          				<button class="btn btn-outline-primary btn-lg" name="'.$v["idcartelera"].'" id="'.$v["idcartelera"].'"  data-toggle="modal" data-target="#ModalPuntuar"><i class="material-icons tiny">add</i></button>'; 
		        			}else {
		        				}
							echo'
						</td>
					</tr>';
					echo '<script type="text/javascript">
						document.getElementById("'.$v["idcartelera"].'").addEventListener("mouseover", function(){
							// var elimina = ;	
			 				let idbutton=this.name;
			 				   $("#quantityP").val(idbutton);
						})
						</script>';
          	}
		}
	}
}
 ?>