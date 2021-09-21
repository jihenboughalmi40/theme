<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
</head>

<body>

<header>

<div class="logo">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" witdh="120px"; height="55px";>



</header>

</div>
<!--ajout menu principal-->
<?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
<!-- ajout de ma nouvelle widget area -->
<?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
 <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'new-widget-area' ); ?>
 </div>
 <?php endif; ?>
 <!-- fin nouvelle widget area -->

 