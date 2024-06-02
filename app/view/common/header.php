<!DOCTYPE html>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?= $page_title ?></title>
  <link rel="stylesheet" type="text/css" href="public/css/headeretfooter.css">
  /* jsp si c'est utile */<?php if (!empty($css)) : ?>
  <link rel="stylesheet" href="public/css/<?= $css ?>">
<?php endif ?>
</head>

<body>
  <header>
    <img class="logo" src="public/images/Mitch noir (1).png" alt="">
    <a href="#" class="Panier"><img src="public/images/Panier.png" alt=""></a>
    <nav id="nav" class="active">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Bières</a></li>
        <li><a href="#">Notre brasserie</a></li>
        <li><a href="#">Vulgarisation</a></li>
        <li><a href="#">Avis</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div id="icons" class="active"></div>
    </nav>
    <script src="public/js/Vulgarisation.js"></script>
  </header>
  <main>