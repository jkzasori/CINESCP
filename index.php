<?php
require_once("Models/enlaces.php");
require_once("Controllers/enlaces.php");
require_once("Controllers/custumer.php");
require_once("Models/custumer.php");
require_once("Controllers/theater.php");
require_once("Models/theater.php");
require_once("Controllers/cartelera.php");
require_once("Models/cartelera.php");
require_once("Controllers/movie.php");
require_once("Models/movie.php");
$ver = new Enlaces();
$ver -> template();

            
?>