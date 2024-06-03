<?php
// require_once 'ajout_biere.php';

// $panier = $_SESSION['panier'].array_keys($ref);
// getSpecificBeers($pdo, $ids);

session_start();
require_once 'app/model/biere.model.php'; // Assurez-vous de remplacer par le chemin correct vers votre modèle

$panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
$ids = array_keys($panier);

if (!empty($ids)) {
    $connexion = mysqli_connect("host", "user", "password", "database"); // Remplacez par vos informations de connexion
    $biereDetails = getSpecificBeers($connexion, $ids);

    $totalPanier = 0;
    foreach ($panier as $id_biere => $quantite) {
        $biere = $biereDetails[$id_biere];
        $montant = $biere['price'] * $quantite;
        $panier[$id_biere] = array(
            'quantite' => $quantite,
            'biere' => $biere,
            'montant' => $montant,
        );
        $totalPanier += $montant;
    }
}

include 'vue_panier.php'; // Assurez-vous de remplacer par le chemin correct vers votre vue
?>



