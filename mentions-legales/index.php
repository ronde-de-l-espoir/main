<?php
// if($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }
?>


<!DOCTYPE html>
<html lang="en" data-hidden>

<head>
    <title>Cookies - La Ronde de l'Espoir</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="./mentions.css">
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
            <h1><a href="">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="../img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="../" class="underline-anim" data-isFocus="false">Accueil</a>
                    <a href="../infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="../galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
                    <a href="../donation/" id="donate-btn" data-isFocus="false">Faire un don</a> <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
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

            <a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>

        </div>

    </header>


    <main>
        <div class="main-wrapper">
            <div id="title">
                <h1>Mentions légales</h1>
                <p>Dernière mise à jour : 02 avril 2023</p>
            </div>
            <p>
                Le site <a href="https://ronde-de-l-espoir.fr">ronde-de-l-espoir.fr</a> est édité par l'association de fait "La Ronde de l'espoir", localisé au <a href="https://www.google.com/maps/place/School+La+Merci+Littoral/@43.5672193,4.0714531,17z/data=!3m1!4b1!4m6!3m5!1s0x12b69801f2364679:0xfffb6abab2e5c531!8m2!3d43.5672193!4d4.0736418!16s%2Fg%2F1vtkr3_l">Lycée La Merci Littoral, Av. de la Petite Motte, 34280 La Grande-Motte.</a> 

<br><br><b>Directeur de la publication :</b>  Jean-Christophe Darnatigues

<br><br><b>Contact :</b> <a href="mailto:contact@ronde-de-l-espoir.fr">contact@ronde-de-l-espoir.fr</a>

<br><br><b>Hébergeur :</b> <a href="https://www.o2switch.fr/notre-histoire/">o2switch</a> 

<br><br>Le site utilise la plateforme de paiement en ligne <a href="https://stripe.com/en-gb-fr">Stripe</a> pour collecter les paiements par carte de crédit et de débit. Les données de paiement sont transmises directement à Stripe et ne sont pas stockées sur nos serveurs.

<br><br>Le site est soumis à la licence Creative Commons Attribution - Pas d'Utilisation Commerciale - Pas de Modification 4.0 International (CC BY-NC-ND 4.0). Cette licence permet de partager et de copier le contenu du site à condition de mentionner la source et de ne pas en faire un usage commercial ni de le modifier.
<br><br>Les informations recueillies sur le site font l'objet d'un traitement informatique destiné à répondre aux demandes des utilisateurs. Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée, vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant. Vous pouvez exercer ce droit en nous contactant à l'adresse <a href="mailto:contact@ronde-de-l-espoir.fr">contact@ronde-de-l-espoir.fr</a>.

<br><br>Le site peut contenir des liens vers d'autres sites internet. Nous ne sommes pas responsables du contenu de ces sites ni des pratiques de confidentialité qu'ils mettent en place.

<br><br>Les présentes mentions légales sont régies par le droit français. Tout litige relatif à leur interprétation et/ou à leur exécution sera soumis aux tribunaux français compétents.
           <br>
           <br>
           <br> 
    </p>
        </div>
    </main>

    <footer>
        <?php
        $currentPage = "cookies";
        include('../footer.php');
        ?>
    </footer>

</body>

</html>
