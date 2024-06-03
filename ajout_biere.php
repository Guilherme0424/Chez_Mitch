<?php

// session_start();

// // 1 - Récupérer, calculer ou déclarer les données
// if (empty($_POST['quantite']) || !ctype_digit($_POST['quantite']) || $_POST['quantite'] < 1) {
//     $_SESSION['message']  = "Vous ne pouvez pas faire une commande de 0 bière.";
//     header('Location: vulgarisation.php');

//     exit;
// }

// $quantite = $_POST['quantite'];

// if (empty($_POST['ref']) || !ctype_digit($_POST['ref']) || $_POST['ref'] < 1) {
//     $_SESSION['message']  = "Vous devez choisir une bière.";
//     header('Location: vulgarisation.php');

//     exit;
// }

// $ref = $_POST['ref'];


// if (!isset($_SESSION['panier'])) {
//     $_SESSION['panier'] = [];
// }

// if (isset($_SESSION['panier'][$ref][$quantite])) {
//     $_SESSION['panier'][$ref] = $quantite;
//     echo "La bière a été ajouté au panier";
// } else {
//     $_SESSION['panier'][$ref] += $quantite;
//     echo "La bière a été ajouté au panier";
//     header('Location: panier.php');
// }

session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

$id_biere = filter_input(INPUT_POST, 'id_biere', FILTER_VALIDATE_INT);
$quantite = filter_input(INPUT_POST, 'quantite', FILTER_VALIDATE_INT);

if ($id_biere && $quantite) {
    if (isset($_SESSION['panier'][$id_biere])) {
        $_SESSION['panier'][$id_biere] += $quantite;
    } else {
        $_SESSION['panier'][$id_biere] = $quantite;
    }
    $message = "La bière a été ajoutée au panier.";
} else {
    $message = "Données invalides.";
}

header("Location: panier.php?message=" . urlencode($message));
exit;