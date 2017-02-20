<nav class="mobmenu">
    <ul class="menu">
	<?php
	$args = array(
	    'title_li' => null,
	    'exclude' => 4,
	    'sort_column' => 'ID'
	);
	$pages = get_pages($args);
	foreach($pages as $page){
		switch ($page->ID) {
			case 15:
				echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a><p class="cursive"> Un projet mélangeant photos et voyage ! </p></li>';
				break;

			case 17:
				echo '<li><a class="pink" href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';
				break;
			
			default:
				echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';
				break;
		}
	}
	?>  
    </ul>
</nav>