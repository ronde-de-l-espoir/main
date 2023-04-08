<?php
    // if($_SERVER["HTTPS"] != "on") {
    //     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //     exit();
    // }
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
    <link rel="stylesheet" href="./faq.css">
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
                    <a href="../" class="underline-anim" data-isFocus="true">Accueil</a>
                    <a href="#" class="underline-anim" data-isFocus="false">Infos</a>
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
                <a href="#" data-isFocus="false" data-hidden>Infos</a>
                <div class="separation" data-hidden></div>
                <a href="../galerie/" data-isFocus="false" data-hidden>Galerie</a>
                <div class="separation" data-hidden></div>
            </div>

            <a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>
            
        </div>
        
    </header>
    

    <main>
        <div class="main-wrapper">
            <h2>FAQ</h2>
            <div class="qa">
                <p class="q">Suite à un versement, je n’ai pas reçu de relevé fiscale, que puis-je faire?</p>
                <p class="a">
                    Merci d’avoir contribué ! Dans l’ordre, vous pouvez :
                    <ol>
                        <li>Contacter directement l’association au <a href="tel:0649868768">06 49 86 87 68</a></li>
                        <li>Envoyer un message à <a href="mailto:contact@ronde-de-l-espoir.fr">contact@ronde-de-l-espoir.fr</a></li>
                    </ol>
                </p>
            </div>
            <div class="qa">
                <p class="q">Quelle est la date limite pour faire un versement ?</p>
                <p class="a">Le vendredi 2 Juin 2023 à 18h</p>
            </div>
            <div class="qa">
                <p class="q">Mes informations seront-elles visibles par d’autres personnes ?</p>
                <p class="a">Non, seule l’association qui délivre la reconnaissance de don aura connaissance de vos informations et s’engage à ne pas les divulguer.</p>
            </div>
            <div class="qa">
                <p class="q">Les dons peuvent-ils être effectués par chèque ?</p>
                <p class="a">Effectivement, les dons peuvent être effectués sous forme de chèque : plus d'informations <a href="../donation/">ici</a></p>
            </div>
            <div class="qa">
                <p class="q">Pourquoi dois-je rentrer mon adresse mail deux fois ?</p>
                <p class="a">Pour que vous puissiez vous envoyer une réduction d’impôts, nous devons récupérer votre adresse mail. La société de transfert Stripe de leur côté ont aussi besoin de votre adresse mail pour vous envoyer un reçu. Cependant, dû à des questions de sécurité, nous ne pouvons pas donner à Stripe votre mail, et vice-versa. Cela permet de sécuriser le paiement.</p>
            </div>
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
