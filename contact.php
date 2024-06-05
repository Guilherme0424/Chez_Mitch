<?php 
$title = 'Contact';
$css = 'public/css/formulaire.css';

$currentPage = 'contact';
ob_start();
include 'app/view/contact.view.php';
$content = ob_get_clean();


include 'app/view/common/layout.php';