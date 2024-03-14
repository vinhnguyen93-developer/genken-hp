<?php
/** 
 * Template Name:現研セミナー
*/
?>
<?php get_header(); ?>
<main>
    <section class="seminar-title">
        <h1><img id="seminar-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/seminar-kikyu.png" alt="セミナーページ画像"></h1>
        <div class="border-only"></div>
    </section>

    <section class="seminar-contents-wrap">
        <div class="seminar-contents">    
            <h2>現研セミナー</h2>
            <p>当セミナーは、現状の壁を乗り越え、新時代にマネジメントの刷新を目指す方々に対し、時宜を捉えて経営の重点的な課題について現研の考え方をご提案し、また有力企業の経営構想・新事業開発・人材育成等の指導を通じて確立した現研の開発型アプローチの手法の一部をご紹介する機会です。
                1990年にスタート以来、オリジナリティの高い独自の目標を続けて参りました。</p>
            <ul>
                <li>現研独自の視点から経営政策を提案します。</li>
                <li>質疑応答、討議を通じ、深く踏み込んだ問題発見を促します。</li>
                <li>開発のための一層の能力アップと技術の浸透を目指します。</li>
            </ul>
            <p>当研究所独自の視点からの政策提案に加え、質疑応答、討議を通じた参加メンバーかsらの意見の提起を重視します。
                深く読み込んだ問題発見、新たな方法開発のための一層の検討等により、日本の企業経営を動かす新しいコンセプトをともに創り上げ、共有することを目指します。
            </p>
        </div>
    </section>

    <section class="seminar-container">
        <div class="seminar-item1">
            <a href="<?php echo esc_url( home_url('/seminar/spring')); ?>">
                <h3>新春セミナー</h3>
                <p>日本企業が実現を志向する将来展望、経営が直面し格闘している問題、新たに構築することが望まれる制度・システム、新分野への事業開発、グローバル人材育成等のコンサルティング実務に直接関わっている現研のコンサルタントが講師を務めます。</p>
            </a>
        </div>
        <div class="seminar-item2">
            <a href="<?php echo esc_url( home_url('/seminar/powerup')); ?>">
                <h3>パワーアップ研究セミナー</h3>
                <p>会社の競争力はその社が培ってきた人材の競争力であり、時代環境に適応して人を変革し続けることができる会社のシステムと組織風土の競争力であると現研は考えます。</p>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
