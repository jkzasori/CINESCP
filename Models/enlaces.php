<?php
ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
class EnlaceModel{
	public function enlacePanelM($enlacePanel){
    
		if ($enlacePanel == 'salir') {
			$module = 'Views/'.$enlacePanel.'.php';
		}
		else if(isset($_SESSION['usuario'])){
			if ($_SESSION['usuario']) {
				$module = 'Views/Content.php';
			}else {
				$module = 'Views/Content.php';
			}	
		}
		else {
			$module = 'Views/Content.php';
		}
		return $module;
	}

	public function enlacePanelMM($enlacePanel){
		if ($enlacePanel == 'cartelera' || $enlacePanel == 'customer') {
				$module = 'Views/'.$enlacePanel.'.php';
			}else{
				$module = 'Views/theater.php';		
			}
		return $module;
	}

}