<?php
session_start();
$page_title = 'Avis';
$css = 'Avis.css';
include "app/model/avis.model.php";
include "app/model/ConnexionBDD.php";
ob_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $commentaire = $_POST['commentaire'];
    // $note = $_POST['Evaluation'];

    // Appeler la fonction pour ajouter l'avis à la base de données
    if (ajouterAvis($commentaire)) {
        echo "Nouvel avis ajouté avec succès";
    } else {
        echo "Erreur lors de l'ajout de l'avis";
    }
}

include 'app/view/Avis.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';

    