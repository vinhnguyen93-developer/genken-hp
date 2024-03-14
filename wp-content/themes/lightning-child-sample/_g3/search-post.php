<?php get_header(); ?>

<main>
    <h1 class="back-blue">コラム＆アーティクル</h1> 
    <section class="column-article-wrap">

       <h3 class="new-article">
           検索結果
       </h3>
       <div class="column-article-archive">
           <div class="management-forum-wrap">
              
           <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,       // 表示数
                    'paged'          => get_query_var('paged', 1), // ページングする場合には記載
                    'order'          => 'DESC', // 降順
                    'orderby'        => 'date', // 日付でソート
                    's'              => get_search_query() // name="s" の検索クエリ
                );
                query_posts($args);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <h3 class="search-result">検索内容：<?php the_search_query(); ?></h3>
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
                                        <p class="small-gray"><?php esc_html(the_field('writer-name')); ?></p>
                                        <p class="small-gray time"><?php the_time('Y-m-d'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <p>キーワードに該当する記事がありませんでした。他のキーワードで再度お試しください。</p>
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
           <?php get_sidebar(); ?>
       </div>
   </section>
</main>

<?php get_footer(); ?>

