<?php  
/** 
 * Template Name:お問合せ
*/
?>
<?php get_header(); ?>
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>
            <h1 class=back-blue>
              <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
       <?php endwhile; ?>
     <?php endif; ?>
<?php get_footer(); ?>