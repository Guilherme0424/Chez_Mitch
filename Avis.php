<?php
session_start();

$page_title = 'Avis';
$css = 'Avis.css';
ob_start();
include 'app/view/Avis.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';