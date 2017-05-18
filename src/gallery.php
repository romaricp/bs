<?php
/*
Template Name: Gallery
*/
get_header(); ?>
<header class="header">
		<div class="navbar row">
			<h2 class="col-md-4 col-lg-3"><a href="<?php echo get_site_url(); ?>"> <span class="bold">Solène </span><span> Louvrier </span> </a></h2>
			<div class=" col-lg-6 col-md-7">
				<div class="breadcrumb">
					<h1> <?php echo get_the_title(); ?> </h1>
					<ul>
					<?php $projects = array('post_type' => 'project', 'category_name'=>get_query_var('pagename'));
					foreach (query_posts($projects) as $project) { ?>
						<li> <a href="#<?php echo get_field('ancre', $project->ID); ?>"> <?php echo $project->post_title; ?> </a> </li>
					<?php } ?>
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
<?php
foreach (query_posts($projects) as $project) { ?>
	<div class="project" id="<?php echo get_field('ancre', $project->ID); ?>">
		<div class="container">
			<h2 class="h1"><?php echo $project->post_title; ?></h2>
			<h3 class="desc"><?php echo get_field('base_line', $project->ID); ?></h3>
			<p class="info"><?php echo get_field('agence', $project->ID); ?> - <?php echo get_field('mise_en_ligne', $project->ID); ?></p>
			<?php if (get_field('url', $project->ID) != null) { ?>
				<a href="http://<?php echo get_field('url', $project->ID); ?>" class="link" target="_blank"> <?php echo get_field('url', $project->ID); ?></a>
			<?php }  ?>
		</div>
		<div class="container-fluid">
			<div class="row gallery">
				<div class="container-gallery col-xl-6 col-md-9 col-sm-12" style="background-color: <?php echo get_field('color1', $project->ID); ?>">
					<div>
						<div class="col-md-4 col-sm-4">
						<!--logo-->
							<img src="<?php echo get_field('logo', $project->ID)['url'] ?>" alt="" class="img-responsive">
						</div>
						<div class="col-md-8 col-sm-8">
						<!--img large 1-->
							<img src="<?php echo get_field('image_1', $project->ID)['url'] ?>" alt="" class="img-responsive">
						</div>
					</div>
				</div>	
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-sm hidden-xs">
					<div class="col-lg-12" style="background-color: <?php echo get_field('color2', $project->ID); ?>">
					<!-- img 2 hidden-sm hidden-xs -->
						<img src="<?php echo get_field('image_2', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="col-xl-2 col-md-3 col-sm-6 col-xs-12">
					<div class="col-lg-12">
					<!-- img 3 -->
						<img src="<?php echo get_field('image_3', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
					<!-- illustration visible-xl-->
						<img src="<?php echo get_field('illustration_1', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-6 visible-sm visible-xs col-xs-12">
					<div class="col-lg-12">
					<!-- img 4 visible-sm visible-xs -->
						<img src="<?php echo get_field('image_4', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="container-gallery col-xl-4 col-md-6 col-sm-12">
					<div style="background-color: <?php echo get_field('color2', $project->ID); ?>" class="bg-pink">
						<div class="col-sm-push-6 col-sm-6 col-xs-12">
							<div class="tips ">
								<?php echo get_field('liste', $project->ID); ?>
							</div>
						</div>
						<div class="col-sm-pull-6 col-sm-6 col-xs-12">
						<!-- img 5 texte-->
							<img src="<?php echo get_field('image_5', $project->ID)['url'] ?>" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-3 col-sm-6 hidden-xs hidden-sm">
					<div class="col-lg-12">
					<!-- img 4 hidden-sm hidden-xs -->	
						<img src="<?php echo get_field('image_4bis', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>	
				<div class="col-xl-2 visible-xl">
					<div class="col-lg-12">
					<!-- illustration 2 visible-xl-->
						<img src="<?php echo get_field('illustration_2', $project->ID)['url'] ?>" alt="" class="img-responsive">
					</div>
				</div>
			</div>	
		</div>
	</div>
	<?php } ?>
	<div class="container">
		<div class="nav-project">
			<div class="prev col-xs-6">
				<?php 
				//echo get_the_ID(); exit;
				//$pages_includes = array_diff([9, 11, 12], [get_the_ID()]);
				//echo implode($pages_includes, ','); exit;
				//var_dump($pages_includes); exit;
				$pages = get_pages(array(
						'sort_order'   => 'desc',
		                'echo'		   => 0,
		                'exclude'	   => '4,17,7,15,'.get_the_ID()
		        	));
				?>
				<h3><a href="<?php echo get_page_link($pages[0]->ID); ?>"><?php echo $pages[0]->post_title; ?></a></h3>
			</div>
			<div class="next col-xs-6">
				<h3><a href="<?php echo get_page_link($pages[1]->ID); ?>"><?php echo $pages[1]->post_title; ?></a></h3>
			</div>
		</div>
	</div>
</div>
<?php include_once( 'copyright.php' ); ?>
<?php get_footer(); ?>