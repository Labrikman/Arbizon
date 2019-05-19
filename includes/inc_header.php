<header>
  <nav>
    <a href="index.php">ACCUEIL</a>
    <a href="top_secret.php">TOP SECRET</a>
  </nav>
  <div>
    Bonjour
    <?php
      if (isset($_SESSION['ident'])) {
        echo $_SESSION['ident'];
        echo ' (<a href="index.php?logout">déconnexion</a>)';
      } else {
        echo 'inconnu';
      }
    ?>
  </div>
</header>
