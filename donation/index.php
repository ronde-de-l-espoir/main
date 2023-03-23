<?php
    // if($_SERVER["HTTPS"] != "on") {
    //     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en" data-hidden>
<head>
    <title>La Ronde de l'Espoir - Faire un don</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <!-- <link rel="stylesheet" href="./donation-style.css"> -->
    <link rel="stylesheet" href="./style.css">
    <script src="../app.js" defer></script>
</head>
<body data-hidden>

    <header data-hidden>
        <div class="title">
            <h1><a href="../">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="../img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="../" class="underline-anim" data-isFocus="true">Accueil</a>
                    <a href="../infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="../galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
                    <a href="#" id="donate-btn" data-isFocus="false">Faire un don</a>  <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
                </div>
            </div>
        </nav>
        <div class="reduced-menu">
            <div class="trigger-wrapper" onclick="triggerSideMenu()" data-hidden>
                <div id="menu-trigger" data-isOpen='false' data-hidden></div>
            </div>
            <img class="nav-logo" src="../img/LRDE-logo.png" data-hidden>
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

            <a href="#" id="side-nav-donation" class="btn-grad" data-hidden>Faites un don!</a>
            
        </div>
        
    </header>
    

    <main>
        <div class="main-wrapper">
            <div id="options-presentation">
                <div class="grid-item" id="title">Vous souhaitez <span class="nowrap">contribuer ?</span> <span class="nowrap">Génial !</span></div>
                <div class="grid-item" id="subtitle">Deux options pour <span class="nowrap">cela :</span></div>

                <div class="grid-item payment-method" id="online">
                    <div class="payment-method-wrapper bigger-font">
                        <p>Passer par notre plateforme de don 100% en ligne :</p>
                        <button class="paiement-redirect-btn" onclick="window.location='https://paiement.ronde-de-l-espoir.fr'">Accéder au portail</button>
                    </div>
                </div>

                <div class="grid-item payment-method" id="cheque">
                    <div class="payment-method-wrapper">
                        <p class="bigger-font">Nous envoyer un chèque à l'adresse <span class="nowrap">suivante</span> :</p>
                        <p id="small-line-break"></p>
                        <p class="indented-paragraph">Unité Informatique<br>Ronde de l'Espoir<br>Lycée La Merci Littoral<br>Av. de la Petite Motte<br>34280 La Grande Motte</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <?php 
            $currentPage = "donation";
            include('../footer.php')  
        ?>
    </footer>

</body> 
</html>
