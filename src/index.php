<?php 
/*
Template Name: Accueil
*/
get_header(); ?>
	<div class="home">
		<header class="header">
			<div class="navbar row">
				<h2 class="col-md-4 col-lg-3"><a href="<?php echo get_site_url(); ?>"> <span class="bold">Solène </span><span> Louvrier </span> </a></h2>
				<div class="burger pull-right">
					<span> </span>
				</div>
			</div>
			<?php include_once( 'menu.php' ); ?>
		</header>
		<div class="content container">
			<h1><a href="<?php echo get_page_link(9); ?>">Webdesign,</a> <a href="<?php echo get_page_link(11); ?>">Design mobile,</a> <br> <a href="<?php echo get_page_link(13); ?>">Intégration</a> </h1>
		</div>
	</div>

<?php get_footer(); ?>