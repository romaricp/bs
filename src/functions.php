<?php 

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//Pour ajouter des thumbmail des images
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

//Pour définir la longueur de l'extrait
function my_excerpt_length($length) {return 100; }
add_filter('excerpt_length', 'my_excerpt_length');

//Ajout de commentaire en Base
add_action('comment_post', 'SaveCommentMeta');

function SaveCommentMeta($comment_id){
	add_comment_meta( $comment_id, 'rating', $_POST[ 'rating' ], true );
	add_comment_meta( $comment_id, 'name', $_POST[ 'name' ], true );
	add_comment_meta( $comment_id, 'mail', $_POST[ 'name' ], true );
}


//Insertion dans les newsletter
function insertnews(){
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	if($_POST['newsletter'] != '' && preg_match($Syntaxe,$_POST['newsletter'])){

		$news = $_POST['newsletter'];
		//Vérification si deja présent
		$req = "SELECT mail FROM walkisout_newsletter WHERE mail = '$news'";
		$res = mysql_query($req);
		$nb = mysql_fetch_row($res);

		
		if($nb == false){
		$insertion="INSERT INTO walkisout_newsletter VALUES ('', '".htmlentities($_POST['newsletter'], ENT_QUOTES | ENT_IGNORE, 'UTF-8')."', '1')";
		$resultat=mysql_query($insertion);

		$resultnews = 1;
		}else{
		$resultnews = 3;	
		}
	}else{
		$resultnews = 2;
	}

    if($_POST['newsletter'] != ''){
        if ($resultnews == 1) {
           // echo '<script type="text/javascript"> alert("Inscription Validée !");</script>';
        }
        if ($resultnews == 2) {
            echo '<script type="text/javascript"> alert("Inscription non-valide !");</script>';
        }
        if ($resultnews == 3) {
            echo '<script type="text/javascript"> alert("Adresse déjà inscrite.");</script>';
        }
    }

}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'langage',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
}

function vartrans(){
	$lang = 'fr';

	if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	}

	//Definition de la variable de transfert pour lien
	if($lang != ''){
		echo '&';
	}else{
		echo '?';
	}

}

function vartransperso(){
    $lang = 'fr';

	if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	}
	
    echo '?lang='.$lang;
}

function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}

//Affichage des article uniquement des gens qui l'ont écris.
if( is_admin() ){

    function baw_author_posts_only( $query )
    {
        $user = wp_get_current_user(); // on va chercher l'utilisateur en cours
        if( $user->user_level < 5 ) {
            $query->set( 'author', $user->ID ); // on ajoute l'auteur dans la requête
            $screen = get_current_screen(); // on va chercher le "screen" actuel
            add_filter('views_' . $screen->id, 'baw_remove_post_counts' ); // et on filtre les liens de filtrages
        }
        return $query;
    }
    add_filter('pre_get_posts', 'baw_author_posts_only' );

    function baw_remove_post_counts( $views )
    {
        return (array)$views['mine']; // je ne garde que le filtre "les miens"
    }
}




?>