<!DOCTYPE html>
<html lang="en" data-hidden>

<head>
    <title>Galerie - Ronde de l'Espoir</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="./gallery.css">
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
<body data-hidden onload="loadGallery()"> <!-- starts the function that loads all the images -->

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
                    <a href="#" class="underline-anim" data-isFocus="true">Galerie</a>
                    <a href="../donation/" id="donate-btn" data-isFocus="false">Faire un don</a> <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
                </div>
            </div>
        </nav>
        <div class="reduced-menu" data-hidden>
            <div class="trigger-wrapper" onclick="triggerSideMenu()" data-hidden>
                <div id="menu-trigger" data-isOpen='false' data-hidden></div>
            </div>
            <img class="nav-logo" src="../img/LRDE-logo.png" alt="Logo de la ronde de l'Espoir">
        </div>

        <div id="side-nav" data-hidden>
            <div class="side-nav-wrapper" data-hidden>
                <div class="separation" data-hidden></div>
                <a href="../" data-isFocus="false" data-hidden>Accueil</a>
                <div class="separation" data-hidden></div>
                <a href="../infos/" data-isFocus="false" data-hidden>Infos</a>
                <div class="separation" data-hidden></div>
                <a href="#" data-isFocus="true" data-hidden>Galerie</a>
                <div class="separation" data-hidden></div>
            </div>

            <a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>
        </div>

    </header>

    <main>
        <div class="main-wrapper">
            <div class="images">
                <!-- Here ./gallery.js will inject photos from ./gallery-photos -->
            </div>
            <script src="./gallery.js"></script>
        </div>
    </main>

    <footer>
        <?php
        $currentPage = "galerie";
        include('../footer.php')
        ?>
    </footer>

</body>

</html>
