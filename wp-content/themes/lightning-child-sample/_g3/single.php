<?php get_header(); ?>
    <p class="back-blue">コラム＆アーティクル</p>
    <div class="single-area">
        <main class="single-main">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <?php if( have_posts()) : ?> <!--投稿があるかどうかを判定し、投稿があれば表示する-->
                <?php
                while( have_posts()) :
                    the_post();
                    ?> 
            <div class="writer-date-category-wrap">
                <p class="writer-name">
                    <?php $text_field = get_field('writer'); ?>
                    <?php echo $text_field; ?>
                </p>
                <!-- 投稿日 -->
                <div class="single-date-ca-wrap">
                    <p class="single-contents-date">
                        <?php 
                            $column_post_year = get_the_date( 'Y' );
                            $column_post_month = get_the_date( 'm');
                        ?>
                        <a href="<?php echo get_month_link( $column_post_year,$column_post_month ); ?>">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                        </a>
                    </p>
                    <p class="ma-forumn-category">
                        <?php the_category(', ' ); ?> <!--カテゴリーを取得-->
                    </p>
                </div>
            </div>
                <!-- 本文(全文) -->
                <div class="single-contents">
                    <?php the_content(); ?>
                </div>
            
                <div class="single-image">
                    <?php $thumbnail = get_field('writer-photo'); ?>
                    <?php if($thumbnail): ?>
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="writer-photo">
                    <?php endif; ?>

                    <?php $caption = get_field('caption'); ?>
                    <?php if($caption): ?>
                        <p class="image-caption"><?php echo esc_html($caption); ?></p>
                    <?php endif; ?>
                </div>

        </main>   
                <?php endwhile; ?> <!------投稿の出力を終了-------->
            <?php endif; ?> <!------投稿の有無判定を終了-------->
        <?php get_sidebar(); ?> 
    </div>  

<?php get_footer(); ?>
