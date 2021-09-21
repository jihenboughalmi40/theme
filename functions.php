<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('custom-header');

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );
  
       

function _register_assets (){
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' , [],);
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['popper','jquery'],false, true);
    wp_register_script('poppar','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' , [], null, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js%27,[], false, true');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}
/*register menu */
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );


//ajout widget //
function header_widgets_init() {
 
    register_sidebar( array(
   
    'name' => 'Ma nouvelle zone de widget',
    'id' => 'new-widget-area',
    'before_widget' => '<div class="nwa-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="nwa-title">',
    'after_title' => '</h2>',
    ) );
   }
   
   add_action( 'widgets_init', 'header_widgets_init' );
   