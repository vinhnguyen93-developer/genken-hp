<?php get_header(); ?>

<main>
<?php if( have_posts()) : ?> <!--投稿があるかどうかを判定し、投稿があれば表示する-->
    <?php
    while( have_posts()) :
        the_post();
        ?> 
          <div class="report-contents">
            <h2><?php echo esc_html(the_field('title')); ?></h2>
            <p><?php echo esc_html(the_field('outline')); ?></p>
            <?php if(get_field('reading-matter')): ?>
              <a href="<?php echo esc_html(the_field('reading-matter')); ?>" target="_blank">資料のダウンロードはこちら</a>
            <?php endif; ?> <!--reaserch-reportの有無判定を終了-->
          </div>
<?php endwhile; ?> <!--投稿の出力を終了-->
<?php endif; ?> <!--投稿の有無判定を終了-->
</main>

<?php get_footer(); ?>

