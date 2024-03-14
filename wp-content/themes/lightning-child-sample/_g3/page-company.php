<?php
/** 
 * Template Name:会社情報
*/
?>
<?php get_header(); ?>
<main>    
    <section class="company-title">
        <h1><img id="company-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kaishajyoho-shadow.png" alt="会社情報ページ画像"></h1>
        <div class="border-only"></div>
    </section>
    
    <section class="company-contents">
        <h2>会社情報</h2>
        <div class="company-container1">

            <div class="company-item8">
                <a href="<?php echo esc_url( home_url('company/message')); ?>">
                    <h3>ご挨拶</h3>
                    <p>現代経営技術研究所所長からのご挨拶です。</p>
                </a>
            </div>
            <div class="company-item8">
                <a href="<?php echo esc_url( home_url('company/purpose')); ?>">
                    <h3>現研の目的</h3>
                    <p>現代経営技術研究所所長からのご挨拶です。</P>
                </a>
            </div>
            <div class="company-item8">
                <a href="<?php echo esc_url( home_url('company/about')); ?>">
                    <h3>会社概要</h3>
                    <p>現代経営技術研究所所長からのご挨拶です。</P>
                </a>
            </div>
        </div>
        <div class="company-container2">  
            <div class="company-item8">
                <a href="<?php echo esc_url( home_url('company/ourstories')); ?>">
                    <h3>our stories</h3>
                    <p>現代経営技術研究所所長からのご挨拶です。</P>
                </a>
            </div>
            <div class="company-item8">
                <a href="<?php echo esc_url( home_url('company/access')); ?>">
                    <h3>access</h3>
                    <p>現代経営技術研究所所長からのご挨拶です。</P>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
