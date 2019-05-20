<?php

  // Initialisation
  require('includes/inc_config.php');

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
    <header>
        <div class="first-nav">
            <div class="logo"></div>
            <nav class="nav">
                <ul>
                    <li>Home</li>
                    <li>Hikes</li>
                </ul>
            </nav>
        </div>
        <section class="wrapper">
            <h5 class="header-sub-title">
                <strong>Mountains worthy of Tolkien's stories</strong>
            </h5>
            <h1 class="header-title">Discover<br>Arbizon.</h1>       
            <a href="" class="header-link">Interested? Let’s go!</a>
            <div class="header-line"></div>
        </section>
    </header>
    <main>
        <section class="map wrapper">
            <p class="sub-title"><strong>The Adour of Payolle is born on its northern slope.</strong></p>
            <h3 class="main-title">
                The most beautiful view <br> 
                of the Pyrénées.
            </h3>
            <div class="text">
                <p>
                    The Arbizon (2,831 m) is the highest point of the Arbizon massif in the Hautes-Pyrénées. It is located east of the Néouvielle massif, between the Aure valley to the east, and the Campan valley to the north.
                </p> 
                <p>   
                    From a geological point of view, the peak of the Arbizon lies at the contact between the granitic massif of Neouvielle (pluton) and the various shales and marls of the Carboniferous.
                </p> 
                <p>  
                    Thus, it is located in the halo of metamorphism caused by the rise of magma within the continental lithosphere, during the various movements of orogenesis that the region has known. Its geological wealth is known to the greatest number: one can find there particular minerals, resulting from the partial recrystallization of the schistose country, such as garnets, axinite, vesuvianite, etc.
                </p>
            </div>
        </section>

        <figure class="mount"></figure>

        <section class="article wrapper">
            <article class="article-wrap">
                <img class="img-article" src="img/desktop_section2_image.jpg" alt="montage-pyrénées">
                <div class="description">
                    <p class="sub-title"><strong>A hard hike</strong></p>
                    <h3 class="main-title">The raptor ridge</h3>
                    <div class="text">
                        <p>The normal route to the Arbizon summit is on the south side, the Aulon Valley. The starting point is the barns of Lurgues, near the village of Aulon, about 1400 m above sea level.</p>
                        <p>Another way of access exists: it takes the valley of the lake of Arou and passes within the Arbizon-Montfaucon circus to climb on the crest by the breach of Aurey…</p>
                    </div>
                    <a href="" class="link">Discover this hike !</a>
                    <div class="lines"></div>
                </div>
            </article>
        </section>
        <section class="article  wrapper">
            <div class="description">
                <p class="sub-title"><strong>The most beautiful view of the Pyrénées</strong></p>
                <h3 class="main-title">Discovers all hikes of Arbizon</h3>
            </div>
            <section class="all-article">
                <?php 

                // Connexion DB
                require('includes/inc_connOK.php');

                // Préparation de la requête
                $requete = 'SELECT id, title, images, levels, texte FROM articles';

                // Exécution de la requête
                $obj_resultats = $connDB -> query($requete);

                // Stockage des résultats
                $tab_resultats = $obj_resultats -> fetchAll(PDO::FETCH_ASSOC);

                // Deconnexion DB
                require('includes/inc_connKO.php');

                // Exploitation des résultats
                foreach($tab_resultats as $tab_ligne){
                    echo '<a href="article.php?id='.$tab_ligne['id'].'">';
                    echo '<article class="mini-article" style="background-image:url('.$tab_ligne['images'].')"';
                    echo '<div class="sub-title-art">'.$tab_ligne['levels'].'</div>';
                    echo '<h3 class="title-art">'.$tab_ligne['title'].'</h3>';
                    echo '</article>';
                    echo '</a>';
                }
                ?> 
            </section>
        </section>
    </main>

    <footer class="wrapper">
        <div class="logo-black"></div>
        <div class=stick-right>   
            <div class="widget">
                <h4>Content</h4>
                <p>123 rue bidon</p>
                <p>65000 Aulon</p>
                <a href="mailto:contact@arbizon.fr"><p>contact@arbizon.fr</p></a>
                <a href="tel:+33 7 12 34 56 78"><p>+33 7 12 34 56 78</p></a>
            </div>
            <div class="widget">
                <h4>Sitemap</h4>
                <nav class="footer-nav">
                    <ul>
                        <li>Home</li>
                        <li>Discover</li>
                        <li>Hikes</li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

</body>
</html>