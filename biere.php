<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdce5547_2024_chez-mitch_1', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Erreur : aucun ID de bière spécifié.');
}

$id = (int)$_GET['id'];
$query = $pdo->prepare('SELECT * FROM biere WHERE id_biere = :id');
$query->execute(['id' => $id]);
$biere = $query->fetch();

if (!$biere) {
    die('Erreur : bière non trouvée.');
}

$page_title = $biere['Nom'];
include 'app/view/biere.view.php';

?>
