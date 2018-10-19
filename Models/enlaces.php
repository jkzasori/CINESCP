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
					$module = 'Views/Inicio.php';
				}else {
			$module = 'Views/Inicio.php';
		}
				
		}
			else {
			$module = 'Views/Inicio.php';
		}
		return $module;
	}
}