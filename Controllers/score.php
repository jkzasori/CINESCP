<?php 
/**
 * 
 */
class Score{
	function addScore(){
		if (empty($_GET['Tid'])) {

		}else{
			if (empty($_POST['SelectionPuntuar']) || empty($_POST['quantityP']) || empty($_POST['customerP'])) {
					//echo "campos vacios";
				}else{
					$resultado = (new ScoreModel) -> addScoreM($_POST['SelectionPuntuar'], $_POST['quantityP'], $_POST['customerP']);
					echo "".$resultado;	
			}
		}
	}
	function oneScore(){
		if (empty($_GET['Cid'])) {	
		}else{
			$idcustomer=$_GET['Cid'];
			$score = (new ScoreModel) -> oneScoreM($idcustomer);
			while ($v= $score->fetch_array(MYSQLI_BOTH)) {
				$cartelera = (new CarteleraModel) -> oneCarteleraM($v["idcartelera"]);
				$movie = (new MovieModel) -> verMovie($cartelera["idmovie"]);
				echo '
				<tr>
                    <td class="text-left ">
                    	<br><span class="text-movie">Movie: </span>'.$movie["name"].'
                    	<br><span class="text-movie">Description: </span>'.$movie["description"].'
                    	<br><span class="text-movie">My Score: </span>'.$v["quantity"].'
                    </td>
                </tr> ';
          }
		}
	}
}
?>