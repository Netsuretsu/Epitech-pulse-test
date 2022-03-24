<?php 
//Ajouter le support de l'image mise en avant
add_theme_support('post-thumbnails');

//Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

//Activer la fonctionalité application
add_filter( 'wp_is_application_passwords_available', '__return_true' );


function epitech_pulse() {


    // Charger le style.css
    wp_enqueue_style('style', get_stylesheet_uri() );


}
add_action('wp_enqueue_scripts', 'epitech_pulse');

?>
