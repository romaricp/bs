<?php
/*
Template Name: Profil
*/
get_header(); ?>

<div class="profil">
		<header class="header">
			<div class="navbar row">
				<h2 class="col-md-4"><a href="index.html"><b>Solène </b><span> Louvrier </span> </a></h2>
				<div class="burger pull-right">
					<span> </span>
				</div>
			</div>
			<?php include_once( 'menu.php' ); ?>
		</header>
		<div class="content container">
			<h1>Webdesigner, Intégrateur </h1>
			<h2>et Voyageuse </h2>
			<ul class="contact">
				<li><a href="mailto:louvrierso@gmail.com"> louvrierso@gmail.com </a></li>
				<li><a href="https://www.linkedin.com/in/solene-louvrier" target="_blank">linkedin.com/in/solene-louvrier</a></li>
				<li>06 87 56 36 92 </li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/img/profil.jpg" class="img-responsive center-block">
			<div class="experience voyage">
				<div class="text-center">
					<h3>Voyage autour du Monde</h3>
					<p class="date">Juin 2016 - Mai 2017</p>
					<p class="description">Amérique du Nord - Amérique du Sud - Océanie - Asie du Sud-Est <br> 8 semaines de Volontariat (WWOOFING - HelpX) au Canada, aux US, en Argentine et en Nouvelle-Zélande </p>
					<p class="description"><a href="https://vimeo.com/215479748" target="_blank">Voir la vidéo </a> - <a href="http://letsgetlost.travelgram.co" target="_blank">Voir le Travelgram </a></p>
				</div>	
			</div>
			<div class="experience travelgram">
				<div class="text-center">
					<h3>Travelgram</h3>
					<p class="date">Juin 2016 - Mai 2017</p>
					<p class="description">Co-fondateur - Direction Artistique <br> <a href="www.travelgram.co" target="_blank">www.travelgram.co</a> </p>
				</div>	
			</div>
			<div class="experience lba">
				<div class="text-center">
					<h3>La Bonne Agence</h3>
					<p class="date">Juin 2016 - Mai 2017</p>
					<p class="description"> Webdesigner - Intégrateur <br> Grenoble (38)</p>
				</div>	
			</div>
			<div class="experience orthodidacte">
				<div class="text-center">
					<h3>Orthodidacte</h3>
					<p class="date">Juin 2016 - Mai 2017</p>
					<p class="description">Webdesigner - Intégrateur <br> Grenoble (38) </p>
				</div>	
			</div>
			<div class="experience ookapi">
				<div class="text-center">
					<h3>Ookapi</h3>
					<p class="date">Juin 2016 - Mai 2017</p>
					<p class="description">Stagiaire Chef de Projet - UI/UX Designer <br> Grenoble (38) </p>
				</div>	
			</div>
			<div class="clear"></div>
			<div class="competence row">
				<div class="col-lg-2 col-md-3 col-sm-6 col-lg-offset-2 col-xs-12">
					<ul class="staring">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li class="empty"></li>
					</ul>
					<p>photoshop</p>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
					<ul class="staring">
						<li></li>
						<li></li>
						<li></li>
						<li class="empty"></li>
						<li class="empty"></li>
					</ul>
					<p>illustrator</p>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
					<ul class="staring">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<p>bootstrap</p>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
					<ul class="staring">
						<li></li>
						<li></li>
						<li class="empty"></li>
						<li class="empty"></li>
						<li class="empty"></li>
					</ul>
					<p>sass</p>
				</div>
			</div>
		</div>
		<div class="bg-pink">
			<div class="container">
				<div class="formation">
					<div class="text-center">
						<p class="date">Juin 2016 - Mai 2017</p>
						<h3>Master Ingénierie des Medias</h3>
						<p class="description">Institut Ingémédia <br> Université du Sud Toulon Var (83) </p>
					</div>	
				</div>
				<div class="formation">
					<div class="text-center">
						<p class="date">Juin 2016 - Mai 2017</p>
						<h3>Bachelor Digital Media</h3>
						<p class="description">Napier University<br> Edimbourg (Ecosse)</p>
					</div>	
				</div>
				<div class="formation">
					<div class="text-center">
						<p class="date">Juin 2016 - Mai 2017</p>
						<h3>DUT Services et Réseaux de Communication </h3>
						<p class="description">IUT Dijon <br> Université de Bourgogne (21) </p>
					</div>	
				</div>
			</div>			
		</div>
		<div class="container text-center hobbit">
			<p>Passionée de <b>Danse</b>, <b>Freeline</b> et <b>Voyage</b></p>
		</div>
		<div class="container text-center cv">
			<a class="btn"> Télécharger CV </a>
		</div>

<?php get_footer(); ?>