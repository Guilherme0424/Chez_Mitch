<?php
session_start();

$page_title = 'Equipe';
$css = 'Equipe.css';
ob_start();
include 'app/view/Equipe.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';