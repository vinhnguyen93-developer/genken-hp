<?php get_header(); ?>
<main>
    <section class="search-result-title">
        <h1><img id="search-result-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/search-megane.png" alt="検索結果虫眼鏡"></h1>
        <div class="border-only"></div>
    </section>

    <section class="search-result-contents-wrap">
        <div class="search-result-contents">
          <h2 class="sp">検索結果</h2>  

            <?php if ( have_posts()): ?>
              <h2 class="search-result"><?php the_search_query(); ?>の検索結果</h2>
              <ul class="result-contents">
              <?php while ( have_posts() ): the_post(); ?>
              <li>
                <h3 class="result-title"><a href= "<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
              </li>
              <?php endwhile; ?>
              <?php else: ?>
                <p>キーワードに該当する記事がありませんでした。他のキーワードで再度お試し下さい。</p>
              <?php endif; ?>
              <div class="nav-links">
                   <!-- ページネーション -->
                    <?php
                    echo paginate_links([
                        'total'     => $wp_query->max_num_pages,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'type'      => 'list',
                        'mid_size'  => 2,
                        'current'   => max(1, get_query_var('paged')),
                    ]);
                    ?>
                </div>

            
        </div>
    </section>
</main>
<?php get_footer(); ?>
