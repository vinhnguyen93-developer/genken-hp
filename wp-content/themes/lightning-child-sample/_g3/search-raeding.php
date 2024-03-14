<?php get_header(); ?>
<main>
    <section class="search-result-title">
        <h1><img id="search-result-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/search-megane.png" alt="検索結果虫眼鏡"></h1>
        <div class="border-only"></div>
    </section>

    <section class="search-result-contents-wrap">
        <div class="search-result-contents">
        <?php
          $args = array(
            'post_type' => get_query_var( 'post_type', 'reading' ),
            'posts_per_page' => 3, //表示数
            'paged' => get_query_var( 'paged', 1 ), //ページングする場合には記載
            'order' => 'DESC', //降順
            'orderby' => 'date', //日付でソート
            's' => get_search_query() //name="s"のです
          );
          $wp_query = new WP_Query($args);    

            <?php if ( $wp_query->have_posts()): ?>
              <h2 class="search-result"><?php the_search_query(); ?>の検索結果</h2>
              <ul>
              <?php while ( $wp_query->have_posts()): $wp_query->the_post(); ?>
              <li>
                <h3><a href= "<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
              </li>
              <?php endwhile; ?>
              <?php else: ?>
                <p>キーワードに該当する記事がありませんでした。他のキーワードで再度お試し下さい。</p>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>

            
        </div>
    </section>
</main>
<?php get_footer(); ?>
