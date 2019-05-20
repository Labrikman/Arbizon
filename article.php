<?php

  // Initialisation
  require('includes/inc_config.php');

  // Récupération de l'ID de l'élève
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    header('Location: index.php');
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sanfrancisco-font.css">
    <!-- <link rel="stylesheet" href="css/responsive-nav.css"> -->
    <script type="text/javascript" src="js/app.js"></script>
    <title>Arbizon</title>
</head>
  <body>
    <main class="result wrapper">
        <?php

        // Connexion DB
        require('includes/inc_connOK.php');

        // Préparation de la requête
        $requete = 'SELECT * FROM articles WHERE id='.$id;

        // Exécution de la requête
        $obj_resultats = $connDB -> query($requete);

        // Stockage des résultats
        $tab_resultat = $obj_resultats -> fetch(PDO::FETCH_ASSOC);

        // Deconnexion DB
        require('includes/inc_connKO.php');

        // Affichage
        echo "<p>".$tab_resultat['title']."</p>";
        echo "<p>".$tab_resultat['levels']."</p>";
        echo "<img class='img-result' src=".$tab_resultat['images'].">";
        echo "<p>".$tab_resultat['texte']."</p>";
        echo '<a href="index.php"><h4 class="link">retour</h2></a>';

        ?>
    </main>
  </body>
</html>