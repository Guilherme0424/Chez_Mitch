<?php
// require_once 'ajout_biere.php';

// $panier = $_SESSION['panier'].array_keys($ref);
// getSpecificBeers($pdo, $ids);

session_start();
include 'app/model/biere.model.php'; // Assurez-vous de remplacer par le chemin correct vers votre modèle
include 'app/model/ConnexionBDD.php';

$pdo=getDatabaseConnection();

$panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
// $panier = [1, 2, "L'originale", 6];
$ids = array_keys($panier);
$nb_biere=0;
$totalPanier = 0;
if (!empty($ids)) {
    // $connexion = mysqli_connect("host", "user", "password", "database"); // Remplacez par vos informations de connexion

    
    
    foreach ($panier as $id_biere => $quantite) {
        $biere = getSpecificBeers($pdo, $id_biere);
        $montant = $biere['prix'] * $quantite;
        $panier[$id_biere] = array(
            'quantite' => $quantite,
            'biere' => $biere,
            'montant' => $montant,
        );
        $totalPanier += $montant;
    }
}

$page_title = 'Panier';
$css = "panier.css";
ob_start();
include 'app/view/panier.view.php'; // Assurez-vous de remplacer par le chemin correct vers votre vue
$content = ob_get_clean();
include 'app/view/common/layout.php';
?>



