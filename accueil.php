<?php 
$title = 'Accueil';
$css = 'accueil.css';

include 'app/model/ConnexionBDD.php';


$currentPage = 'accueil';
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();


include 'app/view/common/layout.php';
