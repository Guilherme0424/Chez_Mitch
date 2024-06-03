<?php

session_start();

// 1 - Récupérer, calculer ou déclarer les données
if (empty($_POST['quantite']) || !ctype_digit($_POST['quantite']) || $_POST['quantite'] < 1) {
    $_SESSION['message']  = "Vous ne pouvez pas faire une commande de 0 bière.";
    header('Location: vulgarisation.php');

    exit;
}

$quantite = $_POST['quantite'];

if (empty($_POST['ref']) || !ctype_digit($_POST['ref']) || $_POST['ref'] < 1) {
    $_SESSION['message']  = "Vous devez choisir une bière.";
    header('Location: vulgarisation.php');

    exit;
}

$ref = $_POST['ref'];


if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

if (isset($_SESSION['panier'][$ref][$quantite])) {
    $_SESSION['panier'][$ref] = $quantite;
    echo "La bière a été ajouté au panier";
} else {
    $_SESSION['panier'][$ref] += $quantite;
    echo "La bière a été ajouté au panier";
    header('Location: panier.php');
}
