<!DOCTYPE html>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?= $page_title ?></title>
  <link rel="stylesheet" type="text/css" href="public/css/headeretfooter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <?php if (!empty($css)) : ?>
    <link rel="stylesheet" href="public/css/<?= $css ?>">
  <?php endif ?>
</head>

<body>
  <a href="panier.php" class="Panier"><img src="public/images/Panier.png" alt=""></a>
  <header>
    <img class="logo" src="public/images/Mitch noir (1).png" alt="">
    <nav id="nav" class="active">
      <ul>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="#">Bières</a></li>
        <li><a href="#">Notre brasserie</a></li>
        <li><a href="vulgarisation.php">Vulgarisation</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <div id="icons" class="active"></div>
    </nav>
    <script src="public/js/Vulgarisation.js"></script>
  </header>
  <main>
