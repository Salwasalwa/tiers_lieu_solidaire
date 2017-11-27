<?php
add_theme_support('post-thumbnails');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	//Plugin Fecebook de la page index.php
	register_sidebar( array(
		'name'          => 'Home Facebook',
		'id'            => 'home_facebook',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

	// Les événements de la page événements
	register_sidebar( array(
		'name'          => 'Page Evénements',
		'id'            => 'home_eventbrite',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

	//derniers articles (événements) Page accuiel (titre/image/date)
	register_sidebar( array(
		'name'          => 'Derniers Articles Accuiel',
		'id'            => 'derniers_articles_accuiel',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

	//derniers événments (Titre)
	register_sidebar( array(
		'name'          => 'Derniers Evénments Titre',
		'id'            => 'derniers_evenments',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

	//Agenda calendrier aside
	register_sidebar( array(
		'name'          => 'Agenda',
		'id'            => 'agenda',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/static/external/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri().'/static/external/font-awesome/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_script_footer() {
	wp_enqueue_script('jquery_script', get_template_directory_uri().'/static/external/jquery/dist/jquery.min.js', true);
    wp_enqueue_script('bootstrap_script', get_template_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js', true);

    wp_enqueue_script ( 'custom-script', get_template_directory_uri() . '/static/js/script.js' );
}
add_action( 'wp_footer', 'add_script_footer' );


function cutString($string, $start, $length, $endStr = '[&hellip]'){
	// si la taille de la chaine est inférieure ou égale à celle
	// attendue on la retourne telle qu'elle
	if( strlen( $string ) <= $length ) return $string;
	// autrement on continue
	// permet de couper la phrase aux caractères définis tout
	// en prenant en compte la taille de votre $endStr et en
	// re-précisant l'encodage du contenu récupéré
	$str = mb_substr( $string, $start, $length - strlen( $endStr ) + 1, 'UTF-8');
	// retourne la chaîne coupée avant la dernière espace rencontrée

	// à laquelle s'ajoute notre $endStr
	return substr( $str, 0, strrpos( $str,' ') ).$endStr;
};
?>
