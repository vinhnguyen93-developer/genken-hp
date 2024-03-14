<?php get_header(); ?>

<main>
    <h1 class="back-blue">コラム＆アーティクル</h1>
        <h2 class="c-art-cate">カテゴリー</h2> 
    <section class="column-article-wrap">
    
       <h3 class="new-article">
           月別：<?php echo get_the_date('Y年n月');?>
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
                                           <p class="small-gray"><?php esc_html(the_field('writer-name')); ?></p>
                                           <p class="small-gray time"><?php the_time('Y-m-d'); ?></p>
                                       </div>
                                   </div>
                               </a>
                           </div>
                        </div>
               <?php endwhile;
               endif;
               ?>

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
