<?php
/** 
 * Template Name:フォーラム
*/
?>
<?php get_header(); ?>
<main>    
    <section class="column-article-title">
        <h1><img id="column-article-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/column-coffee.png" alt="コラム＆アーティクルページ画像"></h1>
        <div class="border-only"></div>
    </section>
    
    <section class="column-article-wrap">
        <h2>コラム＆アーティクル</h2>
        <p class="new-article">最新の記事</p>
        <div class="column-article-archive">
            <div class="management-forum-wrap">

            <!----------------- 最新の2つの投稿を取得------------------>
            
            <?php                
                $args = array(
                'post_type'      => 'column_art',
                'posts_per_page' => 2,
                );

                $query = new WP_Query($args); //サブループ。新しいオブジェクトを作り、その中に配列で条件を指定する

                // ループで投稿を表示
                if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="recent-post">
                    <div class="management-forum">
                        <?php the_category( ', ' ); ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="management-forum-content">
                            <?php the_excerpt(); // 抜粋を表示 ?>
                            <a href="<?php the_permalink(); ?>">続きを読む</a>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(); // クエリのリセット
                else :
                echo 'No posts found';
                ?>
                <?php endif; ?>
            </div>
        
            <aside class="co-aside-area">
                <p class="co-aside-area-search">検索</p>
                <form method="get" action="#" class="co-aside-area-search-form">
                    <input class="co-aside-area-input" type="search">
                    <button class="co-aside-area-button" type="submit"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/musimegane.png" alt="虫メガネ" width="30px" height="30px"></button>
                </form>
                <div class="co-aside-month-archive-wrap">
                    <h3>月別アーカイブ</h3>
                    <ul class="monthly-list">
                        <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
                    </ul>
                </div>
                <div class="co-aside-category">
                    <h3>カテゴリ</h3>
                    <p>マネジメントフォーラム</p>
                </div>

            </aside>
        </div>    
    </section>
    
</main>

<?php get_footer(); ?>
