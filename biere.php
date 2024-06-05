<?php
session_start();
getDatabaseConnection();

ob_start();
$page_title = $biere['Nom'];
include 'app/view/biere.view.php';

$content = ob_get_clean();
include 'app/view/common/layout.php';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cdce5547_2024_chez-mitch', 'cdce5547_2024_S2_admin', 'MMI4ever@senart');
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


?>
