<?php

session_start() ;
// 1 - Récupérer, calculer ou déclarer les données
if (empty($_GET['quantite']) || !ctype_digit($_GET['quantite']) || $_GET['quantite'] < 1) {    
    $_SESSION['message']  = "Vous ne pouvez pas faire une commande de 0 bière." ;
    header('Location: vulgarisation.php');

    exit;
}

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

