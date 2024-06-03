<?php
session_start();

$css = '18ans.css';
ob_start();
include 'app/view/18.view.php';
// $content = ob_get_clean();