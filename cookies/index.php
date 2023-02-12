<?php
// if($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cookies - LRDE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="./cookies.css">
    <script src="../swiped-events.min.js"></script>
    <script src="../app.js" defer></script>
</head>

<body>

    <header>
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
        <div class="reduced-menu">
            <div class="trigger-wrapper" onclick="triggerSideMenu()">
                <div id="menu-trigger" data-isOpen='false'></div>
            </div>
            <img class="nav-logo" src="../img/LRDE-logo.png">
        </div>

        <div id="side-nav">
            <div class="side-nav-wrapper">
                <div class="separation"></div>
                <a href="../" data-isFocus="true">Accueil</a>
                <div class="separation"></div>
                <a href="../infos/" data-isFocus="false">Infos</a>
                <div class="separation"></div>
                <a href="../galerie/" data-isFocus="false">Galerie</a>
                <div class="separation"></div>
            </div>

            <a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>

        </div>

    </header>


    <main>
        <div class="main-wrapper">
            <div id="title">
                <h1>Politique relative aux cookies</h1>
                <p>Dernière mise à jour : 02 février 2023</p>
            </div>
            <p>Cette politique relative aux cookies explique ce que sont les cookies et comment nous les utilisons. Vous devriez lire cette politique afin de comprendre quel type de cookies nous utilisons, ou les informations que nous collectons à l'aide de cookies et comment ces informations sont utilisées. Cette politique de cookies a été créée avec l'aide du <a href="https://www.privacypolicies.com/cookies-policy-generator/" target="_blank">Générateur de politique de cookies</a>.</p>
            <p>Les cookies ne contiennent généralement aucune information permettant d'identifier personnellement un utilisateur, mais les informations personnelles que nous stockons à votre sujet peuvent être liées aux informations stockées dans et obtenues à partir des cookies. Pour plus d'informations sur la manière dont nous utilisons, stockons et protégeons vos données personnelles, consultez notre politique de confidentialité.</p>
            <p>Nous ne stockons pas d'informations personnelles sensibles, telles que les adresses postales, les mots de passe de compte, etc. dans les cookies que nous utilisons.</p>
            <br>
            <h1>1.    Interprétation et définitions</h1>
            <br>
            <h2>1.1    Interprétation</h2>
            <br>
            <p>Les mots dont la lettre initiale est en majuscule ont des significations définies dans les conditions suivantes. Les définitions suivantes auront la même signification, qu'elles apparaissent au singulier ou au pluriel.</p>
            <br>
            <h2>1.2    Définitions</h2>
            <br>
            <p>Aux fins de la présente Politique relative aux cookies :</p>
            <ul>
                <li><strong>Entreprise</strong> (ci-après dénommée "l'Entreprise", "Nous", "Nous" ou "Notre" dans la présente Politique relative aux cookies) fait référence à Ronde de l'Espoir, Av. . de la Petite Motte, 34280 La Grande-Motte.</li>
                <li><strong>Cookies</strong> désigne de petits fichiers placés sur votre ordinateur, appareil mobile ou tout autre appareil par un site Web, contenant des détails sur votre historique de navigation sur ce site Web parmi ses nombreuses utilisations.</li>
                <li><strong>Site Web</strong> désigne Le site de la Ronde de l'Espoir, accessible depuis <a href="https://ronde-de-l-espoir.fr" rel="external nofollow noopener " target="_blank">https://ronde-de-l-espoir.fr</a></li>
                <li><strong>Vous</strong> désigne la personne accédant ou utilisant le site Web, ou une société ou toute entité juridique au nom de laquelle cette personne accède ou utilise le site Web, selon le cas.</li>
            </ul>
            <br>
            <h1>2.    L'utilisation des Cookies</h1>
            <br>
            <h2>2.1    Type de cookies que nous utilisons</h2>
            <br>
            <p>Les cookies peuvent être &quot;Persistants&quot; ou &quot;Session&quot; Biscuits. Les cookies persistants restent sur votre ordinateur personnel ou votre appareil mobile lorsque vous vous déconnectez, tandis que les cookies de session sont supprimés dès que vous fermez votre navigateur Web.</p>
            <p>Nous utilisons à la fois des cookies de session et des cookies persistants aux fins décrites ci-dessous :</p>
            <ul>
                <li>
                    <p><strong>Cookies nécessaires/essentiels</strong></p>
                    <p>Type : Cookies de session</p>
                    <p>Géré par : Nous</p>
                    <p>Objectif : Ces cookies sont essentiels pour vous fournir les services disponibles via le site Web et pour vous permettre d'utiliser certaines de ses fonctionnalités. Ils aident à authentifier les utilisateurs et à empêcher l'utilisation frauduleuse des comptes d'utilisateurs. Sans ces cookies, les services que vous avez demandés ne peuvent pas être fournis, et nous n'utilisons ces cookies que pour vous fournir ces services.</p>
                </li>
                <li>
                    <p><strong>Cookies de fonctionnalité</strong></p>
                    <p>Type : Cookies persistants</p>
                    <p>Géré par : Nous</p>
                    <p>Objectif : ces cookies nous permettent de mémoriser les choix que vous faites lorsque vous utilisez le site Web, tels que la mémorisation de vos informations de connexion ou de votre préférence de langue. Le but de ces Cookies est de Vous offrir une expérience plus personnelle et de Vous éviter d'avoir à ressaisir vos préférences à chaque fois que Vous utilisez le Site.</p>
                </li>
            </ul>
            <br>
            <h2>2.2    Vos choix concernant les cookies</h2>
            <br>
            <p>Si vous préférez éviter l'utilisation de cookies sur le site Web, vous devez d'abord désactiver l'utilisation de cookies dans votre navigateur, puis supprimer les cookies enregistrés dans votre navigateur associé à ce site Web. Vous pouvez utiliser cette option pour empêcher l'utilisation de cookies à tout moment.</p>
            <p>Si vous n'acceptez pas nos cookies, vous pouvez rencontrer des inconvénients dans votre utilisation du site Web et certaines fonctionnalités peuvent ne pas fonctionner correctement.</p>
            <p>Si vous souhaitez supprimer les cookies ou demander à votre navigateur Web de supprimer ou de refuser les cookies, veuillez consulter les pages d'aide de votre navigateur Web.</p>
            <ul>
                <li>
                    <p>Pour le navigateur Web Chrome, veuillez visiter cette page de Google : <a href="https://support.google.com/accounts/answer/32050" rel="external nofollow noopener" target="_blank"> https://support.google.com/accounts/answer/32050</a></p>
                </li>
                <li>
                    <p>Pour le navigateur Web Internet Explorer, veuillez visiter cette page de Microsoft : <a href="http://support.microsoft.com/kb/278835" rel="external nofollow noopener" target="_blank">http ://support.microsoft.com/kb/278835</a></p>
                </li>
                <li>
                    <p>Pour le navigateur Web Firefox, veuillez visiter cette page de Mozilla : <a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" rel="external nofollow noopener" target="_blank">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>
                </li>
                <li>
                    <p>Pour le navigateur Web Safari, veuillez visiter cette page d'Apple : <a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" rel="external nofollow noopener" target="_blank">https://support.apple.com/guide/safari/manage-cookies-and-website-data -sfri11471/mac</a></p>
                </li>
            </ul>
            <p>Pour tout autre navigateur Web, veuillez consulter les pages Web officielles de votre navigateur Web.</p>
            <br>
            <h2>2.3    Plus d'informations sur les cookies</h2>
            <br>
            <p>Vous pouvez en savoir plus sur les cookies : <a href="https://www.privacypolicies.com/blog/cookies/" target="_blank">Que sont les cookies ?</a>.</p>
            <br>
            <h2>2.4    Contactez-nous</h2>
            <br>
            <p>Si vous avez des questions sur cette politique de cookies, vous pouvez nous contacter :</p>
            <ul>
                <li>Par mail : dev@ronde-de-l-espoir.fr</li>
                <li>
                    Par courrier à l'adresse suivante :
                    <p style="padding-left: 5mm;">Unité Informatique<br>Ronde de l'Espoir<br>Lycée La Merci Littoral<br>Av. de la Petite Motte<br>34280 La Grande Motte</p>
                </li>
            </ul>
            <br>
            <br>
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