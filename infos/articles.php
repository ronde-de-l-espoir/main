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
			<h3>Ces articles pourraient vous intéresser :</h3>
			<div class="recommended-article hidden-article" id="qu-est-ce-donc" onclick="window.location.href = '../qu-est-ce-donc'">
				<div class="img-div">
					<img src="../../img/ptit-bg.png">
				</div>
				<div class="article-start">
					<h4>Qu'est-ce que la Ronde de l'Espoir ?</h4>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex quod cum consectetur labore consequuntur a, ad expedita iste unde autem laboriosam beatae eos eligendi officiis rem in itaque? Aspernatur, earum? Lorem Ipsum...</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="dmf-34" onclick="window.location.href = '../dmf-34'">
				<div class="img-div">
					<img src="../photos/dmf.png">
				</div>
				<div class="article-start">
					<h4>Dyspraxique Mais Fantastique</h4>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex quod cum consectetur labore consequuntur a, ad expedita iste unde autem laboriosam beatae eos eligendi officiis rem in itaque? Aspernatur, earum? Lorem Ipsum...</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="kite-surf" onclick="window.location.href = '../kite-surf'">
				<div class="img-div">
					<img src="../photos/kitesurf.jpg">
				</div>
				<div class="article-start">
					<h4>Le Kite Surf</h4>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex quod cum consectetur labore consequuntur a, ad expedita iste unde autem laboriosam beatae eos eligendi officiis rem in itaque? Aspernatur, earum? Lorem Ipsum...</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="record-du-monde-ergo-aviron" onclick="window.location.href = '../record-du-monde-ergo-aviron'">
				<div class="img-div">
					<img src="../photos/aviron.png">
				</div>
				<div class="article-start">
					<h4>La Ronde de l'Espoir : le Record du Monde d'ergo-aviron</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, iste cumque doloribus, architecto eum harum labore at esse, voluptate nesciunt adipisci sunt perferendis earum delectus! Corporis perspiciatis aliquam dolorum magni?</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="le-lycee" onclick="window.location.href = '../le-lycee'">
				<div class="img-div">
					<img src="../../img/logo_littoral_smaller.png">
				</div>
				<div class="article-start">
					<h4>Le Lycée La Merci Littoral</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptatibus sunt consequuntur fugit. Facere nisi dolores expedita a. Pariatur dolores magni aliquid ab incidunt deleniti dolore id error doloremque architecto.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="cap-ou-cap" onclick="window.location.href = '../cap-ou-cap'">
				<div class="img-div">
					<img src="../photos/escalade.jpg">
				</div>
				<div class="article-start">
					<h4>DMF : Cap ou Cap ?</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptatibus sunt consequuntur fugit. Facere nisi dolores expedita a. Pariatur dolores magni aliquid ab incidunt deleniti dolore id error doloremque architecto.</p>
				</div>
			</div>
			<div class="recommended-article hidden-article" id="cap-st-lary" onclick="window.location.href = '../cap-st-lary'">
				<div class="img-div">
					<img src="../photos/rando.png">
				</div>
				<div class="article-start">
					<h4>DMF : Cap St Lary</h4>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt voluptatibus sunt consequuntur fugit. Facere nisi dolores expedita a. Pariatur dolores magni aliquid ab incidunt deleniti dolore id error doloremque architecto.</p>
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