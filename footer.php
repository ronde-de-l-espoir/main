<?php
    if ($currentPage != "accueil"){
        $prefix = "../";
    } else {
        $prefix = "./";
    }
?>

<div class="footer-wrapper">
    <div class="footer-main-line">
        <div class="flex-item">
            <img src="<?php echo $prefix . "img/lrde_white_border.png" ?>" class="footer-img" onclick="window.location='https://ronde-de-l-espoir.fr'">
            <div class="footer-border right"></div>
        </div>
        <div class="flex-item">
            <div class="footer-border left"></div>
            <span class="footer-content">
                <p>Les onglets</p>
                <br>
                <ul>
                    <li><a href="<?php echo $prefix ?>">Accueil</a></li>
                    <li><a href="<?php echo $prefix . "infos" ?>">Infos</a></li>
                    <li><a href="<?php echo $prefix . "galerie" ?>">Galerie</a></li>
                    <li><a href="<?php echo $prefix . "donation" ?>">Faire un don</a></li>
                </ul>
            </span>
            <div class="footer-border right"></div>
        </div>
        <div class="flex-item">
            <div class="footer-border left"></div>
            <span class="footer-content">
                <p>Autres pages</p>
                <br>
                <ul>
                    <li><a href="<?php echo $prefix . "faq" ?>">FAQ</a></li>
                    <li><a href="mailto:contact@ronde-de-l-espoir.fr">Contact</a></li>
                    <li><a href="https://github.com/ronde-de-l-espoir">GitHub</a></li>
                </ul>
            </span>
            <div class="footer-border right"></div>
        </div>
        <div class="flex-item">
            <div class="footer-border left"></div>
            <span class="footer-content">
                <p>Formalités légales</p>
                <br>
                <ul>
                    <li><a href="<?php echo $prefix . "mentions" ?>">Mentions légales</a></li>
                    <li><a href="<?php echo $prefix . "cookies" ?>">Politique cookies</a></li>
                    <li><a href="https://stripe.com/en-gb-fr/legal/end-users">Mentions de Stripe</a></li>
                </ul>
            </span>
            <div class="footer-border right"></div>
        </div>
        <div class="flex-item">
            <div class="footer-border left"></div>
            <img src="<?php echo $prefix . "img/clean_logo_littoral.png" ?>" class="footer-img" onclick="window.location='https://lamerci.com/littoral/accueil'">
        </div>
    </div>
    <div id="social-bar">
        <p>Rejoignez-nous : </p>
        <img src="<?php echo $prefix . "img/facebook.svg" ?>" onclick="window.location='https://facebook.com/ronde-de-l-espoir'">
        <img src="<?php echo $prefix . "img/instagram.svg" ?>" onclick="window.location='https://instagram.com/@ronde-de-l-espoir'">

    </div>
</div>

<div class="copyright">
    <img class="copyright-img" src="<?php echo $prefix . "img/copyright-badge.svg" ?>" onclick="window.location='https://creativecommons.org/licenses/by-nc-sa/4.0/legalcode'">
</div>
