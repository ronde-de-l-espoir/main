<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../articles-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
	<header>
		<div class="header-wrapper">

			<span class="title">La Ronde de l'Espoir</span>
			<span class="arrow">
				<a href="https://ronde-de-l-espoir.fr/infos">
					<span class="material-symbols-outlined">arrow_back</span>
				</a>
			</span>

			<span class="nav-image">
				<img src="../../img/LRDE-logo.png" alt="">
			</span>
		</div>
	</header>
	<main id="main">
		<div id="article">
			<h2></h2>
			<div id="article-text"></div>
			<p id="source"></p>
		</div>
		<div id="suggestions-column">
			<h3>Ces articles pourraient vous intéresser :</h3>
			<div class="recommended-article hidden-article" id="qu-est-ce-donc" onclick="window.location.href = '../quesako'">
				<div class="img-div">
					<img src="../../img/ptit-bg.png">
				</div>
				<div class="article-start">
					<h4>La Ronde de l'Espoir : Quésako ?</h4>
					<p>Cette manifestation se déroule tous les trois ans dans notre lycée et est vouée à venir en aide à des enfants malades, affectés de pathologies handicapantes etc…</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="dmf-34" onclick="window.location.href = '../dmf-34'">
				<div class="img-div">
					<img src="../photos/dmf.png">
				</div>
				<div class="article-start">
					<h4>Dyspraxique Mais Fantastique</h4>
					<p>DMF est une association qui rassemble et aide les familles touchées par la dyspraxie. Elle aide les familles en les mettant en relation avec d'autres familles et des médecins spécialisés dans cette maladie.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="kite-surf" onclick="window.location.href = '../kite-surf'">
				<div class="img-div">
					<img src="../photos/kitesurf.jpg">
				</div>
				<div class="article-start">
					<h4>Objectif KiteLoop</h4>
					<p>Cet article est en cours de création...</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="record-du-monde-ergo-aviron" onclick="window.location.href = '../record-du-monde-ergo-aviron'">
				<div class="img-div">
					<img src="../photos/aviron.png">
				</div>
				<div class="article-start">
					<h4>La Ronde de l'Espoir : le Record du Monde d'ergo-aviron</h4>
					<p>Lors de l’édition de 2014 un record du monde en ergomètre sur 24h a été réalisé par les lycéens de l’époque. Lors de l’édition suivante une équipe mixte a réussi à battre un nouveau défi, ils ont ramé pendant 24h sur un ergomètre en parcourant l’équivalent de plus de plus de 400 km. Ils n’ont toujours pas été battus.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="le-lycee" onclick="window.location.href = '../le-lycee'">
				<div class="img-div">
					<img src="../../img/logo_littoral_smaller.png">
				</div>
				<div class="article-start">
					<h4>Le Lycée La Merci Littoral</h4>
					<p>C’est en 2004 que le lycée La Merci Littoral a ouvert ses portes à La Grande Motte, établissement fondé par l’institution Notre Dame de La Merci de Montpellier. Depuis son ouverture, ce lycée privé n’a cessé de s’agrandir et d'innover.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="cap-ou-cap" onclick="window.location.href = '../cap-ou-cap'">
				<div class="img-div">
					<img src="../photos/escalade.jpg">
				</div>
				<div class="article-start">
					<h4>DMF : Cap ou Cap ?</h4>
					<p>« Cap ou cap ? » a pour objectif de faire vivre les émotions fortes de l’escalade à une dizaine de jeunes avec dyspraxie et leurs familles.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="equipe">
				<div class="img-div">
					<img src="../../img/ptit-bg.png">
				</div>
				<div class="article-start">
					<h4>La Fine Equipe</h4>
					<p>Article à venir...</p>
				</div>
			</div>
		</div>
	</main>
</body>
<script src="../articles.js"></script>

<footer>
	<?php
	// $currentPage = "infos";
	// include('../../footer.php');
	?>
</footer>

</html>