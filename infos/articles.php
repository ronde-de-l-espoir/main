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
				<img src="../img/LRDE-logo.png" alt="">
			</span>
		</div>
	</header>
	<main id="main">
		<div id="article">
			<div id="test">
				<h2></h2>
			</div>
			<div id="article-text">

			</div>
		</div>
		<div id="suggestions-column">
			<div class="article" id="art1" onclick="window.location.href = './qu-est-ce-la-ronde-de-l-espoir/'">
				<div class="img-div">
					<img src="../../img/ptit-bg.png">
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
					<img src="../../img/art2.jpg">
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
					<img src="../../img/art3.png">
				</div>
				<div class="article-start">
					<h3>Cap St Lary 2018</h3>
					<p>C’est au début de l’été 2018, dans le décor naturel de St Lary...</p>
				</div>
			</div>
		</div>
	</main>
</body>
<script src="../articles.js"></script>

</html>