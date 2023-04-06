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
    <title>La Ronde de l'Espoir - FAQ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <script src="../swiped-events.min.js"></script>
    <script src="../app.js" defer></script>
    <link rel="stylesheet" href="faq.css">
</head>
<body data-hidden>

    <header data-hidden>
        <div class="title">
            <h1><a href="">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="../img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="#" class="underline-anim" data-isFocus="true">Accueil</a>
                    <a href="../infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="../galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
                    <a href="../donation/" id="donate-btn" data-isFocus="false">Faire un don</a>  <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
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
                <a href="../" data-isFocus="true" data-hidden>Accueil</a>
                <div class="separation" data-hidden></div>
                <a href="../infos/" data-isFocus="false" data-hidden>Infos</a>
                <div class="separation" data-hidden></div>
                <a href="../galerie/" data-isFocus="false" data-hidden>Galerie</a>
                <div class="separation" data-hidden></div>
            </div>

            <a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>
            
        </div>
        
    </header>
    

    <main>
        <div class="main-wrapper">
            <div id="title">
                <h2>Suite à un versement, je n’ai pas reçu de relevé fiscale, que puis-je faire?</h2>
            </div>
            <p>Merci d’avoir contribuer! Dans l’ordre, vous pouvez :
- Contacter l’association au 06 49 86 87 68
- Envoyer un message à contact@ronde-de-l-espoir.fr</p>
            <div id="title">
                <h2>Quelle est la date limite pour faire un versement ?</h2>
            </div>
            <p>Le Vendredi 2 Juin 2023 à 18h.</p>
            <div id="title">
                <h2>Mes informations seront-elles visibles par d’autres personnes ?</h2>
            </div>
            <p>Non, seule l’association qui délivre la reconnaissance de don aura connaissance de vos informations et s’engage à ne pas les divulguer.</p>
            <div id="title">
                <h2>Les dons peuvent-ils être effectués par chèque ?</h2>
            </div>
            <p>Effectivement, les dons peuvent être effectués sous forme de chèque que vous pouvez libeller à “DMF 34”.</p>
            <div id="title">
                <h2>Pourquoi dois-je rentrer mon adresse mail deux fois ?</h2>
            </div>
            <p>Pour que vous puissiez vous envoyer une réduction d’impôts, nous devons récupérer votre adresse mail. La société de transfert Stripe de leur côté ont aussi besoin de votre adresse mail pour vous envoyer un reçu. Cependant, dû à des questions de sécurité, nous ne pouvons pas donner à Stripe votre mail, et vice-versa. Cela permet de sécuriser le paiement.</p>

        </div>
    </main>

    <footer>
        <?php 
            $currentPage = "faq";
            include('../footer.php');
        ?>
    </footer>

</body> 
</html>
