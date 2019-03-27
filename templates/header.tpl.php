<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>oLogin</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="app">
    <header id="header">
      <h1 id="app-title"><a href="index.php">oLogin</a></h1>
      <nav id="nav">
        <a href="index.php">Accueil</a>
        <a href="#">Profil</a>
        <a href="#">À propos</a>
        <a href="#">FAQ</a>
        <a href="#">Contact</a>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<a href="logout.php">Déconnexion</a>';
        }
        ?>
      </nav>
    </header>