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
	function verScore(){
		
	}
}
?>