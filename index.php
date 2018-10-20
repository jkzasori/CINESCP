<?php
require_once("Models/enlaces.php");
require_once("Controllers/enlaces.php");
require_once("Controllers/customer.php");
require_once("Models/customer.php");
require_once("Controllers/theater.php");
require_once("Models/theater.php");
require_once("Controllers/cartelera.php");
require_once("Models/cartelera.php");
require_once("Controllers/movie.php");
require_once("Models/movie.php");
require_once("Controllers/score.php");
require_once("Models/score.php");
$ver = new Enlaces();
$ver -> template();

            
?>