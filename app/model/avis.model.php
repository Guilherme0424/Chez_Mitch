<?php
function ajouterAvis($commentaire, $note) {
    // Inclure le fichier de connexion à la base de données
    include "ConnexionBDD.php";

    // Préparer la requête SQL pour l'insertion d'un nouvel avis
    $stmt = $conn->prepare("INSERT INTO avis (Commentaire, Evaluation) VALUES (?, ?)");
    $stmt->bind_param("si", $commentaire, $note);

    // Exécuter la requête SQL
    if ($stmt->execute()) {
        return true; // Succès
    } else {
        return false; // Erreur
    }

    // Fermer la connexion
    $stmt->close();
}