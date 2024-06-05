<?php 
$title = 'Accueil';
$css = 'public/css/accueil.css';

$currentPage = 'accueil';
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();


include 'app/view/common/layout.php';
