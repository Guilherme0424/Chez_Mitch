<?php
session_start();
include 'app/model/ConnexionBDD.php';
include 'app/model/trombiequipe.model.php';

$pdo = getDatabaseConnection();

$page_title = 'Equipe';
$css = 'Equipe.css';
ob_start();
include 'app/view/Equipe.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';