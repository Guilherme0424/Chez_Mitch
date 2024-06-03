<?php
session_start();

$page_title = 'Vulgarisation';
$css = 'vulgarisation.css';
ob_start();
include 'app/view/Vulgarisation.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';