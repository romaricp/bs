<?php
/*
Template Name: Gallery
*/
get_header(); ?>
<header class="header">
		<div class="navbar row">
			<h2 class="col-lg-3 col-md-4"><a href="<?php echo get_site_url(); ?>"><b>Solene </b><span> Louvrier </span> </a></h2>
			<div class=" col-lg-6 col-md-7">
				<div class="breadcrumb">
					<h1> Intégration </h1>
					<ul>
						<li> <a href="#francemontagnes"> France Montagnes </a> </li>
						<li> <a href="#opinel"> Opinel </a> </li>
						<li> <a href="#martinberger"> Atelier Martin Berger </a> </li>
					</ul>
				</div>
			</div>
			<div class="burger pull-right">
				<span> </span>
			</div>
		</div>
		<?php include_once( 'menu.php' ); ?>
	</header>
<div class="content">
	<div class="project" id="francemontagnes">
		<div class="container">
			<h2 class="h1">France Montagnes </h2>
			<h3 class="desc"> Portail des stations de ski françaises </h3>
			<p class="info"> Agence : La Bonne Agence - Mise en ligne : Juin 2015 </p>
			<a href="http://www.france-montagnes.fr" class="link" target="_blank"> www.france-montagnes.com </a>
		</div>
		<div class="container-fluid">
			<div class="row gallery gallery-fm">
				<div class="container-gallery col-xl-6 col-md-9 col-sm-12">
					<div class="bg-color">
						<div class="col-md-4 col-sm-4">
						<!--logo-->
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/logo.png" alt="" class="img-responsive">
						</div>
						<div class="col-md-8 col-sm-8">
						<!--img large 1-->
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/800_400.png" alt="" class="img-responsive">
						</div>
					</div>
				</div>	
				<!-- img  cachées sm xs-->	
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-sm hidden-xs">
					<div class="col-lg-12 bg-pink">
					<!-- img 2 hidden-sm hidden-xs -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_2.png" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="col-xl-2 col-md-3 col-sm-6 col-xs-12">
					<div class="col-lg-12">
					<!-- img 3 -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_1.png" alt="" class="img-responsive">
					</div>
				</div>
				<!-- img illustration -->	
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
					<!-- illustration visible-xl-->
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_4.png" alt="" class="img-responsive">
					</div>
				</div>
				<!-- img sm xs -->	
				<div class="col-sm-6 visible-sm visible-xs col-xs-12">
					<div class="col-lg-12">
					<!-- img 4 visible-sm visible-xs -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_3.png" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="container-gallery col-xl-4 col-md-6 col-sm-12">
					<div class="bg-pink">
						<div class="col-sm-push-6 col-sm-6 col-xs-12">
							<div class="tips ">
								<p>France Montagnes</p>
								<ul>
									<li> - Site responsive </li>
									<li> - Framework : Bootstrap 3 </li>
									<li> - Olalalaloooala </li>
								</ul>
							</div>
						</div>
						<div class="col-sm-pull-6 col-sm-6 col-xs-12">
						<!-- img associé texte-->
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_2.png" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<!-- img 4 hidden-sm hidden-xs -->	
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-xs hidden-sm">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_3.png" alt="" class="img-responsive">
					</div>
				</div>	
				<!-- img illustration -->
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
					<!-- illustration 2 visible-xl-->
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_4.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="project" id="opinel">
		<div class="container">
			<h2 class="h1">Opinel </h2>
			<h3 class="desc"> Portail des stations de ski françaises </h3>
			<p class="info"> Agence : La Bonne Agence - Mise en ligne : Juin 2015 </p>
			<a href="#" class="link"> www.france-montagnes.com </a>
		</div>
		<div class="container-fluid">
			<div class="row gallery gallery-fm">
				<div class="container-gallery col-xl-6 col-md-9 col-sm-12">
					<div class="bg-color">
						<div class="col-md-8 col-sm-8">
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/800_400.png" alt="" class="img-responsive">
						</div>
						<div class="col-md-4 col-sm-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/logo.png" alt="" class="img-responsive">
						</div>
					</div>
				</div>	
				<!-- img  cachées sm xs-->	
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-sm hidden-xs">
					<div class="col-lg-12 bg-pink">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_2.png" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="col-xl-2 col-md-3 col-sm-6">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_1.png" alt="" class="img-responsive">
					</div>
				</div>
				<!-- img illustration -->	
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_4.png" alt="" class="img-responsive">
					</div>
				</div>
				<!-- img sm xs -->	
				<div class="col-sm-6 visible-sm visible-xs">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_3.png" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="container-gallery col-xl-4 col-md-6 col-sm-12">
					<div class="bg-pink">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_2.png" alt="" class="img-responsive">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="tips ">
								<p>France Montagnes</p>
								<ul>
									<li> - Site responsive </li>
									<li> - Framework : Bootstrap 3 </li>
									<li> - Olalalaloooala </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- img cachée sm xs -->	
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-xs hidden-sm">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_3.png" alt="" class="img-responsive">
					</div>
				</div>	
				<!-- img illustration -->
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/FM/400_4.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="nav-project">
			<div class="prev col-xs-6">
				<h3><a href="">Voir les projets webdesign</a></h3>
			</div>
			<div class="next col-xs-6">
				<h3><a href="">Voir les projets design Mobile</a></h3>
			</div>
		</div>
	</div>
</div>
<?php include_once( 'copyright.php' ); ?>
<?php get_footer(); ?>