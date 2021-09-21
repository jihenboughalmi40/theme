
<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>


<main id="acceuil">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>

    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('medium'); ?>
    <h2><?php the_title(); ?></h2>
</a>
    
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">
    
    lire
</a>
</article>
<?php
  endwhile;
endif;
  
?>
 </main>

 <?php get_footer(); ?>

 <!--annimation--->

 <script>function changeBackground() {
            //change color every frame
            //initialise colors ( hue, lightness)
            var hue = 360;
            var light = 0;

            function changeHue (){
                var col1 = Math.abs((hue % 720) - 360);
                var col2 = Math.abs( ( (hue+90) % 720) - 360);
                hue++ ;

        //values for light adjustment not used
                var light1 = Math.abs( (light % 40) - 20)+60; 
                var light2 = Math.abs( ( (light+10) % 40) - 20)+60;
                light++ ;

                document.body.style.background = 'linear-gradient(to right, hsl('+col1 +',70%, 75%) 0%,hsl('+col2 +',90%,75%) 100%)';
            }
            setInterval    (changeHue, 64);
        }
        changeBackground();</script>

