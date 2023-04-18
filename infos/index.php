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
				<div class="article" id="qu-est-ce-donc" onclick="window.location.href = './quesako'">
					<div class="img-div">
						<img src="../img/ptit-bg.png">
					</div>
					<div class="article-start">
						<h3>La Ronde de l'Espoir : Quésako ?</h3>
						<p>Cette manifestation se déroule tous les trois ans dans notre lycée et est vouée à venir en aide à des enfants malades, affectés de pathologies handicapantes etc…</p>
					</div>
				</div>
				<div class="article" id="dmf-34" onclick="window.location.href = './dmf-34'">
					<div class="img-div">
						<img src="./photos/dmf.png">
					</div>
					<div class="article-start">
						<h3>Dyspraxique Mais Fantastique</h3>
						<p>DMF est une association qui rassemble et aide les familles touchées par la dyspraxie. Elle aide les familles en les mettant en relation avec d'autres familles et des médecins spécialisés dans cette maladie.</p>
					</div>
				</div>
				<div class="article" id="kite-surf" onclick="window.location.href = './kite-surf'">
					<div class="img-div">
						<img src="./photos/kitesurf.jpg">
					</div>
					<div class="article-start">
						<h3>Objectif KiteLoop</h3>
						<p>Objectif Kiteloop est une association fondée en 2009 et basée à La Grande-Motte, qui regroupe sportifs partageant une même passion : “le Kite Surf”.</p>
					</div>
				</div>
			</div>
			<div id="second-row">
				<div class="article" id="record-du-monde-ergo-aviron" onclick="window.location.href = './record-du-monde-ergo-aviron'">
					<div class="img-div">
						<img src="./photos/aviron.png">
					</div>
					<div class="article-start">
						<h3>La Ronde de l'Espoir : le Record du Monde d'ergo-aviron</h3>
						<p>Lors de l’édition de 2014 un record du monde en ergomètre sur 24h a été réalisé par les lycéens de l’époque. Lors de l’édition suivante une équipe mixte a réussi à battre un nouveau défi, ils ont ramé pendant 24h sur un ergomètre en parcourant l’équivalent de plus de plus de 400 km. Ils n’ont toujours pas été battus.</p>
					</div>
				</div>
				<div class="article" id="le-lycee" onclick="window.location.href = './le-lycee'">
					<div class="img-div">
						<img src="../img/logo_littoral_smaller.png">
					</div>
					<div class="article-start">
						<h3>Le Lycée La Merci Littoral</h3>
						<p>C’est en 2004 que le lycée La Merci Littoral a ouvert ses portes à La Grande Motte, établissement fondé par l’institution Notre Dame de La Merci de Montpellier. Depuis son ouverture, ce lycée privé n’a cessé de s’agrandir et d'innover.</p>
					</div>
				</div>
				<div class="article" id="cap-ou-cap" onclick="window.location.href = './cap-ou-cap'">
					<div class="img-div">
						<img src="./photos/escalade.jpg">
					</div>
					<div class="article-start">
						<h3>DMF : Cap ou Cap ?</h3>
						<p>« Cap ou cap ? » a pour objectif de faire vivre les émotions fortes de l’escalade à une dizaine de jeunes avec dyspraxie et leurs familles.</p>
					</div>
				</div>
				<div class="article" id="equipe">
					<div class="img-div">
						<img src="../img/ptit-bg.png">
					</div>
					<div class="article-start">
						<h3>La Fine Equipe</h3>
						<p>Article à venir...</p>
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