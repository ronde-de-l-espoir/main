<?php
    if($_SERVER["HTTPS"] != "on") {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="./donation-style.css">
    <script src="../app.js"></script>
</head>
<body>

    <header>
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
            <div class="trigger-wrapper" onclick="triggerSideMenu()">
                <div id="menu-trigger" data-isOpen='false'></div>
            </div>
            <img class="nav-logo" src="../img/LRDE-logo.png">
        </div>

        <div id="side-nav">
            <div class="side-nav-wrapper">
                <div class="separation"></div>
                <a href="#" data-isFocus="true">Accueil</a>
                <div class="separation"></div>
                <a href="./infos/" data-isFocus="false">Infos</a>
                <div class="separation"></div>
                <a href="./galerie/" data-isFocus="false">Galerie</a>
                <div class="separation"></div>
            </div>

            <a href="./donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>
            
        </div>
        
    </header>
    

    <main>
        <div class="main-wrapper">
            <div id="options-presentation">
                <p id="je-fais-un-don">Je contribue !</p>
                <p style="font-size: 125%; font-weight: 250;">Comment ?</p>
                <br>
                <ul>
                    <!-- <li>en me rapprochant d'un élève de l'établissement La Merci Littoral</li>
                    <br> -->
                    <li>
                        <p>En se rendant sur notre plateforme de don en ligne : </p>
                        <!-- <div style="visibility: hidden; height: 5mm"></div> -->
                        <div id="paiement-redirect">
                            <button type="button" id="paiement-redirect-btn" onclick="location.href='https://paiement.ronde-de-l-espoir.fr/choosing/'">Je donne en ligne !</button>
                        </div>
                        <!-- <div style="visibility: hidden; height: 15mm"></div> -->
                    </li>
                    
                    <li>
                        <p>En faisant un virement bancaire à l'IBAN suivant :</p>
                        <p class="indented-paragraph">😥 Nous n'avons pas encore d'IBAN...</p>
                    </li>
                    <br>
                    <li>
                        <p>En envoyant un chèque à l'adresse suivante :</p>
                        <br>
                        <p class="indented-paragraph">Unité Informatique<br>Ronde de l'Espoir<br>Lycée La Merci Littoral<br>Av. de la Petite Motte<br>34280 La Grande Motte</p>
                    </li>
                    <br>
                </ul>
            </div>
            <div style="visibility: hidden; height: 2cm"></div>
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
