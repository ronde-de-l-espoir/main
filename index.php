<?php
    if($_SERVER["HTTPS"] != "on") {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
    include "./get_total.php";
?>


<!DOCTYPE html>
<html lang="en" data-hidden>
<head>
    <title>La Ronde de l'Espoir</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="accueil-style.css">
    <link rel="stylesheet" href="count-box.css">
    <script src="./swiped-events.min.js"></script>
    <script src="./app.js" defer></script>
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
            <h1><a href="">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="#" class="underline-anim" data-isFocus="true">Accueil</a>
                    <a href="./infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="./galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
                    <a href="./donation/" id="donate-btn" data-isFocus="false">Faire un don</a>  <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
                </div>
            </div>
        </nav>
        <div class="reduced-menu">
            <div class="trigger-wrapper" onclick="triggerSideMenu()" data-hidden>
                <div id="menu-trigger" data-isOpen='false' data-hidden></div>
            </div>
            <img class="nav-logo" src="./img/LRDE-logo.png" data-hidden>
        </div>

        <div id="side-nav" data-hidden>
            <div class="side-nav-wrapper" data-hidden>
                <div class="separation" data-hidden></div>
                <a href="#" data-isFocus="true" data-hidden>Accueil</a>
                <div class="separation" data-hidden></div>
                <a href="./infos/" data-isFocus="false" data-hidden>Infos</a>
                <div class="separation" data-hidden></div>
                <a href="./galerie/" data-isFocus="false" data-hidden>Galerie</a>
                <div class="separation" data-hidden></div>
            </div>

            <a href="./donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>
            
        </div>
        
    </header>
    

    <main>
        <div class="main-wrapper">

            <div id="slogan">
                <p>Mobilisons nous pour les enfants à l'hôpital !</p>
                <a id="learn-more" href="./infos">En apprendre plus</a>
            </div>

            <div id="counter">
                <div class="count-box">
                    <div class="totalDisplay">
                        <div style="display: inline;">
                            <?php echo $totalDonations; ?> 
                        </div>
                        <div style="font-size: 70%; position: relative; padding-left: -10px; display: inline; top: -20px">€</div>
                    </div>
                    <p id="more-infos">ont été récoltés pour la Ronde de l'Espoir !</p>
                </div>
                <div style="visibility: hidden; padding: 5px;"></div>
                <p class="peopleInfos">Déjà <span id="peopleTotal"><?php echo $totalParticipants ?></span> participants ! Qu'attendez-vous ?</p>
                <a href="./donation/" id="contribute-button">Contribuer</a>
            </div>

        </div>
    </main>

    <footer>
        <?php 
            $currentPage = "accueil";
            include('./footer.php');
        ?>
    </footer>

</body> 
</html>
