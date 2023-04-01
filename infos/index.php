<!DOCTYPE html>
<html lang="en">

<head>
	<title>Informations - Ronde de l'Espoir</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../img/LRDE-logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../common.css">
	<link rel="stylesheet" href="./style.css">
	<title>LRDE -- Chargement</title>
	<script src="../app.js" defer></script>
	<script src="./fitty.min.js"></script>
</head>

<body>

	<header>
		<div class="title">
			<h1><a href="../">La Ronde de l'Espoir</a></h1>
			<img src="../img/darna2.jpeg" alt="Darna Le Tournoyant" class="darna">
		</div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

		<nav>
			<div class="nav-wrapper">

				<img src="../img/clean_logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">

				<div class="link-wrapper">
					<a href="../" class="underline-anim" data-isFocus="false">Accueil</a>
					<a href="#" class="underline-anim" data-isFocus="true">Infos</a>
					<a href="../galerie/" class="underline-anim" data-isFocus="false">Galerie</a>
					<a href="../donation/" id="donate-btn" data-isFocus="false">Faire un don</a>
				</div>
			</div>
		</nav>
		<div class="reduced-menu">
			<div class="trigger-wrapper" onclick="triggerSideMenu()">
				<div id="menu-trigger" data-isOpen='false'></div>
			</div>
			<img class="nav-logo" src="../img/LRDE-logo.png" alt="Logo de la ronde de l'Espoir">
		</div>

		<div id="side-nav">
			<div class="side-nav-wrapper">
				<div class="separation"></div>
				<a href="../" data-isFocus="false">Accueil</a>
				<div class="separation"></div>
				<a href="#" data-isFocus="true">Infos</a>
				<div class="separation"></div>
				<a href="../galerie/" data-isFocus="false">Galerie</a>
				<div class="separation"></div>
			</div>



			<a href="../donation/" id="side-nav-donation" class="btn-grad">Faites un don!</a>

		</div>

	</header>


	<main>
		<div class="wrapper">
			<div id="first-row">
				<div class="article" id="art1" onclick="window.location.href = './qu-est-ce-la-ronde-de-l-espoir/'">
					<div class="img-div">
						<img src="../img/ptit-bg.png">
					</div>
					<div class="article-start">
						<h3>Qu'est-ce que la Ronde de l'Espoir ?</h3>
						<div class="text">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex quod cum consectetur labore consequuntur a, ad expedita iste unde autem laboriosam beatae eos eligendi officiis rem in itaque? Aspernatur, earum? Lorem Ipsum...</p>
						</div>
					</div>
				</div>
				<div class="article" id="art2" onclick="window.location.href = './cap-ou-pas-cap-dyspraxie/'">
					<div class="img-div">
						<img src="../img/art2.jpg">
					</div>
					<div class="article-start">
						<h3>Cap ou cap ? S’initier à l’escalade avec une dyspraxie</h3>
						<p>Depuis notre premier projet en 2014 qui avait emmené une quarantaine de personnes dans les
							Calanques pour découvrir la voile et l’escalade, ce sont près de 250
							personnes, des parents, des enfants et adolescents malades et...
						</p>
					</div>
				</div>
				<div class="article" id="art3" onclick="window.location.href = './cap-st-lary-2018/'">
					<div class="img-div">
						<img src="../img/art3.png">
					</div>
					<div class="article-start">
						<h3>Cap St Lary 2018</h3>
						<p>C’est au début de l’été 2018, dans le décor naturel de St Lary...</p>
					</div>
				</div>
			</div>
			<div id="second-row">
				<div class="article" id="art4" onclick="window.location.href = './lrde-edition-2017/'">
					<div class="img-div">
						<img src="../img/ptit-bg.png">
					</div>
					<div class="article-start">
						<h3>La Ronde - Edition 2017</h3>
						<p>Ce vendredi 31 mars 2017 a débuté la Ronde de l’Espoir de La Merci Littoral. A cette occasion le lycée a organisé de nombreuses activités en vue de récolter des fonds pour les enfants hospitalisés. Si l’objectif était de récolter un maximum d’argent, ce fût aussi l’occasion de nombreux moments de divertissement.</p>
					</div>
				</div>
				<div class="article" id="art5">
					<div class="img-div">
						<img src="../img/cigale.jpg">
					</div>
					<div class="article-start">
						<h3>Organisation La Cigale</h3>
						<p>Depuis notre premier projet en 2014 qui avait emmené une quarantaine de personnes dans les
							Calanques pour découvrir la voile et l’escalade, ce sont près de 250
							personnes, des parents, des enfants et adolescents malades et...
						</p>
					</div>
				</div>
				<div class="article" id="art6">
					<div class="img-div">
						<img src="../img/art3.png">
					</div>
					<div class="article-start">
						<h3>Cap St Lary 2018</h3>
						<p>C’est au début de l’été 2018, dans le décor naturel de St Lary...</p>
					</div>
				</div>
				<div class="article" id="art7">
					<div class="img-div">
						<img src="../img/art3.png">
					</div>
					<div class="article-start">
						<h3>Cap St Lary 2018</h3>
						<p>C’est au début de l’été 2018, dans le décor naturel de St Lary...</p>
					</div>
				</div>
			</div>
	</main>

	<footer>
		<?php
			$currentPage = "infos";
			include('../footer.php');
		?>
	</footer>
</body>

</html>

<!--porg-->
<!-- Verification -->