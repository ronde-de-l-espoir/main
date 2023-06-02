<?php
// if($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }
?>


<!DOCTYPE html>
<html lang="en" data-hidden>

<head>
    <title>Contact - La Ronde de l'Espoir</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="./contact.css">
    <script src="../swiped-events.min.js"></script>
    <script src="../app.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6XM6CLQWYR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6XM6CLQWYR');
</script>
<body data-hidden>

    <header data-hidden>
        <div class="title">
            <h1><a href="../">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="../img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="../" class="underline-anim" data-isFocus="false">Accueil</a>
                    <a href="../infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="../galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
                </div>
            </div>
        </nav>
        <div class="reduced-menu" data-hidden>
            <div class="trigger-wrapper" onclick="triggerSideMenu()" data-hidden>
                <div id="menu-trigger" data-isOpen='false' data-hidden></div>
            </div>
            <img class="nav-logo" src="../img/LRDE-logo.png">
        </div>

        <div id="side-nav" data-hidden>
            <div class="side-nav-wrapper" data-hidden>
                <div class="separation" data-hidden></div>
                <a href="../" data-isFocus="false" data-hidden>Accueil</a>
                <div class="separation" data-hidden></div>
                <a href="../infos/" data-isFocus="false" data-hidden>Infos</a>
                <div class="separation" data-hidden></div>
                <a href="../galerie/" data-isFocus="false" data-hidden>Galerie</a>
                <div class="separation" data-hidden></div>
            </div>


        </div>

    </header>


    <main>
        <div id="text">
            <div id="title">Nous contacter</div>
            <div id="subtitle">Veuillez choisir l'adresse mail qui correspond le mieux à votre demande</div>
        </div>
        <div id="options">
            <div class="option" id="contact" onclick="window.location = 'mailto:contact@ronde-de-l-espoir.fr'">
                <div class="option-name">Contact</div>
                <div class="explanation">
                    Adresse mail générale
                    <br><br>
                    Demandes relatives :
                    <ul>
                        <li>• Aux actions, buts, etc de la Ronde</li>
                        <li>• Aux évènements de la Ronde</li>
                    </ul>
                </div>
            </div>
            <div class="option" id="contact" onclick="window.location = 'mailto:dev@ronde-de-l-espoir.fr'">
                <div class="option-name">Développeurs</div>
                <div class="explanation">
                    Développeurs des sites de la Ronde
                    <br><br>
                    Demandes relatives :
                    <ul>
                        <li>• A des soucis techniques</li>
                        <li>• A des idées d'amélioration</li>
                    </ul>
                </div>
            </div>
            <div class="option" id="contact" onclick="window.location = 'mailto:compta@ronde-de-l-espoir.fr'">
                <div class="option-name">Comptabilité</div>
                <div class="explanation">
                    Trésorier de la Ronde
                    <br><br>
                    Demandes relatives :
                    <ul>
                        <li>• A des factures, des reçus fiscausx</li>
                        <li>• Au fonctionnement de la déductibilité d'impôts</li>
                    </ul>
                </div>
            </div>
            <div class="option" id="contact" onclick="window.location = 'mailto:rgpd@ronde-de-l-espoir.fr'">
                <div class="option-name">RGPD</div>
                <div class="explanation">
                    Protection des données
                    <br><br>
                    Demandes relatives :
                    <ul>
                        <li>• Aux données que nous récoltons sur vous</li>
                        <li>• A la suppression de toutes vos données</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php
        $currentPage = "contact";
        include('../footer.php');
        ?>
    </footer>

</body>

</html>
