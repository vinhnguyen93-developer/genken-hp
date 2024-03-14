<?php
/** 
 * Template Name:our Stories
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="back-blue">Our Stories</h1>
    <?php if( have_posts()) : ?>
        <?php
        while( have_posts()):
            the_post();
            ?>
                <div class="ourstories-si-contents">
                    <h2 class="outline-heading">（Ⅰ）現研の創立と組織基盤の確立</h2>
                    <h3 class="ourstories-era"><?php the_field('era'); ?></h3>
                    <h3 class="ourstories-mm"><?php the_field('mm-heading'); ?></h3>
                    <P class="outline"><span class="outline-hi">S.40・7・1&nbsp;現代経営技術研究所&nbsp;設立</span><br>
                        日米講和条約の発効、日本の独立から13年が経ち、昭和は40年代を迎えました。戦後を脱した日本社会には、一気に、日本人による日本企業の建設とその力によって、日本社会をリードしていこうという気運が強まって来ました。現代経営技術研究所（現研）は、そんな雰囲気の中で、次々と現れてくる新しい事態に対応し、近い将来必要となる日本企業の戦略、企画、計画問題、マネジメント問題等々に関し、企業の助言をする独立系の民間シンクタンクを創設したいという鈴木成裕の意志の下に設立されました。
                    </p>

                    <div class="ourstories-first">
                        <h4 class="ourstories-s"><?php the_field('s-heading'); ?></h4>
                        <p class="ourstories-text"><?php the_field('text'); ?></p>
                        <p class="r-title">
                            <a href="<?php the_field('url'); ?>"><?php the_field('side-heading'); ?></a>
                        </p>
                        
                    </div>

                    <div class="ourstories-second">
                        <h4 class="ourstories-s"><?php the_field('s-heading2'); ?></h4>
                        <p class="ourstories-text"><?php the_field('text2'); ?></p>
                        <p class="r-title">
                            <a href="<?php the_field('url'); ?>"><?php the_field('side-heading2'); ?></a>
                        </p>
                    </div>

                </div>
                <?php endwhile; ?>
          <?php endif; ?>      
</main>

<?php get_footer(); ?>
