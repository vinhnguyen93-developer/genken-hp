<?php get_header(); ?>

<main>
    <section class="column-article-title">
        <h1><img id="column-article-visual" src="<?php echo get_stylesheet_directory_uri(); ?>/_g3/image/column-coffee.png" alt="コラム＆アーティクルページ画像"></h1>
        <div class="border-only"></div>
    </section>
    <section class="column-article-wrap">
        <h2>コラム＆アーティクル</h2>

        <h3 class="new-article">
            <?php
                if (is_month()) :
                echo get_the_date('Y年n月');
                elseif (is_category()) :
                single_cat_title();
                else :
                echo '最新の記事';
                endif;
            ?>
        </h3>
        <div class="column-article-archive">
            <div class="management-forum-wrap">

                <?php if (have_posts()) : ?>
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <!-- ループさせるコンテンツ  -->
                        
                        <div class="recent-post">
                            <div class="management-forum">
                                <?php
                                    $column_category_list = get_the_category();
                                    if ( $column_category_list) :
                                ?>
                                <?php echo esc_html( $column_category_list[0]->name ); ?>
                                <?php endif; ?>

                                    <h3><?php the_title(); ?></h3>
                                    <div class="management-forum-content">
                                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); // 抜粋を表示 ?></a>
                                        <div class="w-name-time">
                                            <p class="small-gray"><?php the_field('writer-name'); ?></p>
                                            <p class="small-gray time"><?php the_time('Y-m-d'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
            </div>
            
            
            <?php get_sidebar(); ?>
        </div>
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

    </section>
</main>

<?php get_footer(); ?>
