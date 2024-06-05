<?php

// Chargement de la vue
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

// Génération de la page HTML à partir du Layout
include 'app/view/common/header.php';
include 'app/view/common/footer.php';