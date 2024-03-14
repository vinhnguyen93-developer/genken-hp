<?php
/** 
 * 固定ページテンプレート保険~テンプレート作り忘れ、指定忘れの時に自動的に使われる
*/
?>
<?php get_header(); ?>
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
      endif;
    ?>
<?php get_footer(); ?>
