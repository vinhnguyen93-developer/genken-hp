<?php get_header(); ?>

    <div id="back-white"></div>
        
    <main>
        <section class="subtitle">
            <img id="main-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/color-logo.png" alt="トップページ画像現研">
        </section>

        <section class="news">
            <h1>TOPICS</h1>
            <div class="news-TOPICS">
                <dl>
                    <dt>2022年3月10日</dt>
                    <dd>産業研究会が行われました</dd>
                    <dt>2022年3月10日</dt>
                    <dd>ホームページをリニューアルしました</dd>
                    <dt>2022年3月10日</dt>
                    <dd>○が行われました。これ以上の文字数は省略されます。</dd>
                    <dt>2022年3月10日</dt>
                    <dd>○が行われました。これ以上の文字数は省略されます。</dd>
                    <dt>2022年3月10日</dt>
                    <dd>○が行われました。これ以上の文字数は省略されます。</dd>
                </dl>
            </div>
        </section>

        <section class="main-contents">
            <ul class="main-contents-cards">
                <li>
                    <div class="card-visual">  
                        <a href="<?php echo esc_url(home_url('strategy-planning')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/jigyo-keieikousou-card.png" alt="事業・経営構想づくり">
                        <div class="card-visual-title"><p><span class="change-white">事業・経営構想づくり</span></p></div></a> 
                    </div>          
                </li>
                <li>
                    <div class="card-visual">     
                        <a href="<?php echo esc_url(home_url('global-management-executives')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/global-keiei-card.png" alt="グローバル経営">
                        <div class="card-visual-title"><p><span class="change-white">グローバル経営</span></p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">   
                        <a href="<?php echo esc_url(home_url('education-training')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kyouiku-kensyuu-card.png" alt="教育研修">
                        <div class="card-visual-title"><p><span class="change-white">教育研修</span></p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">
                        <a href="<?php echo esc_url(home_url('hr-system')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/jinjiseido-sekkei-card.png" alt="人事制度設計">
                        <div class="card-visual-title"><p><span class="change-white">人事制度設計</span></p></div></a>
                    </div>
                </li>
                <li> 
                    <div class="card-visual"> 
                        <a href="<?php echo esc_url(home_url('project')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/henkaku-pj-card.png" alt="変革プロジェクト指導">
                        <div class="card-visual-title"><p><span class="change-white">変革プロジェクト指導</span></p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">
                        <a href="<?php echo esc_url(home_url('study')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kenkyukai-katsudo-card.png" alt="研究会活動">
                        <div class="card-visual-title"><p>研究会活動</p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">
                        <a href="<?php echo esc_url(home_url('seminar')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/genken-seminar-card.png" alt="現研セミナー">
                        <div class="card-visual-title"><p>現研セミナー</p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">
                        <a href="<?php echo esc_url(home_url('training')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kangaekata-card.png" alt="経営考え方教室">
                        <div class="card-visual-title"><p><span class="change-white">経営考え方教室</span></p></div></a>
                    </div>
                </li>
                <li>
                    <div class="card-visual">
                        <a href="<?php echo esc_url(home_url('think-tank-function')); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/syakaiteigen-card.png" alt="社会提言">
                        <div class="card-visual-title"><p>社会提言</p></div></a>
                    </div>
                </li>
            </ul>
        </section>

        <section class="yomimono-wrap">

            <div id="back-lightblue"></div>
            
            <div class="yomimono">
                <h2>現研の読み物</h2>
                <div class="reading-search-content">
                    <?php get_template_part('searchform-reading'); ?>
                </div>
            </div>
            
            <!--<div class="yomimono-container">-->
            
                <div class="yomimono-container">
                    <?php

                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;                
                        $reading_args = array(
                        'post_type' => 'reading', // カスタム投稿タイプのスラッグを指定
                        'posts_per_page' => 3, // 1ページに表示する記事の数
                        'paged' => $paged, //ページングを表示する場合
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );
                
                        $post_reading_query = new WP_Query($reading_args);
                        
                        if ($post_reading_query->have_posts()) :
                            while ($post_reading_query->have_posts()) : $post_reading_query->the_post();
                    ?>
                    <!--ループさせるコンテンツ -->
                        <div class="yomimono-item">
                            <a href="<?php the_field('url'); ?>" target="_blank">
                            <img src="<?php the_field('thumbnail'); ?>" class="yomimono-item1">
                            <h3><?php the_field('title'); ?></h3>
                            <p><?php the_field('outline'); ?></p>
                            <?php
                                // カスタムフィールドの新着マークコード
                                $custom_field_value = get_post_meta(get_the_ID(), 'new-flag', true);

                                if ($custom_field_value) {
                                    echo '<span class="ribbon">NEW</span>';
                                }
                            ?>                
                            </a>
                        </div>
                    <?php endwhile; ?>
                
                    <?php endif; ?>
                </div>
            <!--</div>-->  
            <div class="nav-links">
                <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links([
                    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'    => 'page/%#%/',
                    'current'   => max(1, get_query_var('paged')),
                    'total'     => $post_reading_query->max_num_pages,
                        'end_size'  => '1', // ページ番号リストの両端に表示するページ数
                        'mid_size'  => '2', // 現在ページの左右に表示するページ番号の数
                        'prev_next' => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                        'prev_text' =>  '<',  // 「前へ」の文言変更
                        'next_text' =>  '>',  // 「次へ」の文言変更
                        'type'      => 'list', // 戻り値の指定 (plain/list)
                    ]);
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </section>
        <div id="back-lightgray2"></div>
    </main>

    <div id="back-lightgray"></div>

<?php get_footer(); ?>
 

