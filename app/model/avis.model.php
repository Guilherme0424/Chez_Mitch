<?php
function ajouterAvis($commentaire) {
    // Inclure le fichier de connexion à la base de données
    include "ConnexionBDD.php";

    // Préparer la requête SQL pour l'insertion d'un nouvel avis
    $stmt = $conn->prepare("INSERT INTO avis (Commentaire) VALUES (?)");
    $stmt->bind_param("s", $commentaire);

    // Exécuter la requête SQL
    if ($stmt->execute()) {
        return true; // Succès
    } else {
        return false; // Erreur
    }

    // Fermer la connexion
    $stmt->close();
}