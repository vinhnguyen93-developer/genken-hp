<?php
/** 
 * Template Name:事業の構成
*/
?>
<?php get_header(); ?>
<main>
    <section class="service-title">
        <h1><img id="service-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/businesspillars.png" alt="事業の構成ページ画像"></h1>
        <div class="border-only"></div>  
    </section>

    
    <section class="service-contents"> 
        <h2>事業の構成</h2>
        <div class="service-container">
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/consulting-nontitle.png" alt="経営コンサルティングページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('service/consulting')); ?>">経営コンサルティング</a></h3>
                <p>概要を記録する。</p>
            </div>
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/human-vivid-nontitle.png" alt="人材開発ページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('service/training')); ?>">人材開発</a></h3>
                <p>概要を記録する。</p>
            </div>
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/seminar-kikyu-nontitle.png" alt="現研セミナーページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('seminar')); ?>">セミナー・公開研修</a></h3>
                <p>概要を記録する。</p>
            </div>
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kenkyukai-toudai-nontitle.png" alt="研究会活動ページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('study')); ?>">研究会活動</a></h3>
                <p>概要を記録する。</p>
            </div>
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/syakaiteigen-nontitle.png" alt="社会提言ページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('think-tank-function')); ?>">社会提言</a></h3>
                <p>概要を記録する。</p>
            </div>
            <div class="service-item">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/media-bluebird-nontitle.png" alt="メディア事業ページ画像"></a>
                <h3><a href="<?php echo esc_url( home_url('media')); ?>">メディア事業</a></h3>
                <p>概要を記録する。</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
