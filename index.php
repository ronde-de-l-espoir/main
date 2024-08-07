<?php
    // if($_SERVER["HTTPS"] != "on") {
    //     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //     exit();
    // }
    // this should be reactivated to have an automatic redirect towards the http*s* protocol

    include "./get_total.php"; // gets the total and number of participants
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    
    <link rel="shortcut icon" href="img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="common.css"> <!-- general, all-pages CSS -->
    <link rel="stylesheet" href="accueil-style.css"> <!-- page-specific CSS -->
    <link rel="stylesheet" href="count-box.css"> <!-- CSS for the count-box, as this is only used here, please add it to this page's CSS -->
    <script src="./swiped-events.min.js"></script> <!-- JS lib to open side-nav on swipe -->
    <script src="./app.js" defer></script>
    <!-- <script src="./carousel.js" defer></script> -->
    <script src="./lib/odometer/odometer.min.js"></script> <!-- JS lib for the spinning total -->
    <link rel="stylesheet" href="./lib/odometer/odometer-theme-default.css">
    <script>
        window.odometerOptions = {
            auto: true, // starts automatically
            // selector: '.totalDisplay',
            // duration: '3000',
            // animation: 'count'
            format: '( ddd),dd' // french formatting, sometimes this isn't applied due to cache
        }
        setTimeout(function(){
            var total = <?php echo $totalDonations;?>;
            odometer.innerHTML = total; // feed the total to the odometer lib
        }, 1);
    </script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6XM6CLQWYR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6XM6CLQWYR'); // Google Analytics tag, replace accordingly
</script>
<body data-hidden>

    <header data-hidden>
        <div class="title">
            <h1><a href="">La Ronde de l'Espoir</a></h1>
        </div>

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
                <p>Mobilisons-nous pour les enfants en situation de handicap !</p>
                <a id="learn-more" href="./infos">En apprendre plus</a>
            </div>

            <div id="counter">
                <div class="count-box">
                    <div class="totalDisplay">
                        <div class="odometer" id="odometer" style="display: inline-block;" ></div>
                        <div style="font-size: 70%; position: relative; padding-left: -10px; display: inline; top: -20px">€</div> <!-- positions the € correctly (not at the same height as the total is please think subconscionsly it is another 0...) -->
                    </div>
                    <p id="more-infos">ont été récoltés pour la Ronde de l'Espoir !</p>
                </div>
                <div style="visibility: hidden; padding: 5px;"></div>
                <p class="peopleInfos">Déjà <span id="peopleTotal"><?php echo $totalParticipants ?></span> participants ! Qu'attendez-vous ?</p>
                <a href="./donation/" id="contribute-button">Contribuez <br><span id="tax-evasion-text">et profitez jusqu'à <b>66%</b> de déduction fiscale !</span></a>
            </div>

        </div>

        
    </main>

    <section class="video-section">
        <video src="./media/LRDE2023.mp4" controls autoplay></video> <!-- video to replace accordingly, right now it is the 2023 one. It isn't in the repo, please place it in the ./media directory and rename it -->
    </section>

    <footer>
        <?php 
            $currentPage = "accueil"; // imports the footer and specifies which page we are on
            include('./footer.php'); 
        ?>
    </footer>

</body> 
</html>
