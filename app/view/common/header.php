<!DOCTYPE html>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?= $page_title ?></title>
  <link rel="stylesheet" type="text/css" href="public/css/headeretfooter.css">
<<<<<<< HEAD
  <?php if (!empty($css)) : ?>
  <link rel="stylesheet" href="public/css/<?= $css ?>">
<?php endif ?>
=======
  /* jsp si c'est utile */<?php if (!empty($css)) : ?>
    <link rel="stylesheet" href="public/css/<?= $css ?>">
  <?php endif ?>
>>>>>>> parent of 5df7e80 (View c'est ok je crois..)
</head>
<body>
  <header>
    <img src="public/images/Mitch noir (1).png" alt="">

    <nav id="nav" class="active">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Bières</a></li>
        <li><a href="#">Notre brasserie</a></li>
        <li><a href="#">Vulgarisation</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div id="icons"></div>
    </nav>
    <script src="public/js/Vulgarisation.js"></script>
  </header>
  <main>