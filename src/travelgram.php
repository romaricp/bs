<?php
/*
Template Name: Travelgram
*/
get_header(); ?>

	<header class="header travelgram">
		<div class="navbar row">
			<h2 class="col-lg-3 col-md-4"><a href="<?php echo get_site_url(); ?>"><b>Solene </b><span> Louvrier </span> </a></h2>
			<div class="burger pull-right">
				<span> </span>
			</div>
		</div>
		<?php include_once( 'menu.php' ); ?>
	    <div class="container">
			<h1>Travelgram </h1>
			<h2> Co-fondactrice, Direction Artistique </h2>
		</div>
	</header>
	<div class="content travelgram">
		<div class="container">
			<a class="link" href="http://www.travelgram.co" target="_blank">www.travelgram.co </a>
			<h3 class="desc">Travelgram, un service en ligne pour partager et géolocaliser rapidement et facilement vos photos de voyage via Instagram. </h3> 
		</div>
		<div class="logo">
			<div class="container">
				<div class="row">
					<div class="title col-sm-6">
						<div class="number">#01.</div>
						<h2> Logo & Charte </h2>
					</div>
					<div class="col-sm-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-logo.png" class="img-responsive hidden-xs" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-logo-grey.svg" alt="" class="img-responsive center-block">
					</div>
					<div class="col-xs-6">
						<div class="colors center-block">
							<div class="red">
								<span>#fc6d4b</span>
							</div>
							<div class="green">
								<span>#4cffc1</span>
							</div>
							<div class="grey">
								<span>#333333</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="webdesign">
			<div class="container">
				<div class="row">
					<div class="title col-md-6">
						<div class="number">#02.</div>
						<h2> webdesign</h2>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/tg-webdesign.png" class="center-block img-responsive" alt="">
			</div>
			<div class="bg-red">
				<div class="container">
					<p class="center-block">N'attendez plus d'être rentré<br>pour partager votre voyage</p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/tg-macbook.png" class="img-responsive center-block" alt="">
				</div>
			</div>
		</div>
		<div class="comm">
			<div class="container">
				<div class="row">
					<div class="title col-md-8">
						<div class="number">#03.</div>
						<h2> Réseaux sociaux <br > & communiqué de presse </h2>
					</div>
				</div>
				<ul>
					<li> <a href="https://www.facebook.com/Travelgram-1461254764193232/" target="_blank">Page Facebook </a></li>
					<li> <a href="https://twitter.com/travelgram_app?lang=fr" target="_blank"> Compte Twitter </a></li>
					<li> <a href=""> Télécharger le communiqué de presse </a> </li>
				</ul>
				<img src="<?php echo get_template_directory_uri(); ?>/img/tg-reseauso.jpg" class="img-responsive center-block hidden-xs" alt="">
				<div class="row fb-mobile visible-xs">
					<div class="col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-fb1.jpg" class="img-responsive center-block visible-xs" alt="">
					</div>
					<div class="col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-fb2.jpg" class="img-responsive center-block visible-xs" alt="">
					</div>
					<div class="col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-fb3.jpg" class="img-responsive center-block visible-xs" alt="">
					</div>
					<div class="col-xs-6">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-fb4.jpg" class="img-responsive center-block visible-xs" alt="">
					</div>
				</div>
			</div>
		</div>
<?php include_once( 'copyright.php' ); ?>
<?php get_footer(); ?>