<?php
/** 
 * Template Name:経営コンサルティング
*/
?>
<?php get_header(); ?>
<main>
    <section class="consulting-title">
        <h1><img id="consulting-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/consulting.png" alt="経営コンサルティングページ画像"></h1>
        <div class="border-only"><div>
    </section>

    <section class="consulting-contents-wrap">
        <div class="consulting-contents">    
            <h2>経営コンサルティング</h2>
            <p>日本企業の経営の変革と進化に貢献します。そのために現研独自の戦略開発法、構想化技術、プロジェクト推進の手法、コンセプト設計、構造分析などのメソッドを投入して進めます。<br>
                未来環境に伏在する成長機会とリスクの因子を事前に発見し、獲得すべき新しい競争力づくりに早期に取り組むとともに、クライアント企業が伝統の中で培ってきた自社のアイデンティティに根差した競争力を形成することに協力します。<br>
                コンサルティングの成功をより骨太で力強いものとして連続させるために、システムづくりと人づくりを重視して独自のコンサルティングを展開してきました。
            </p>
            <p>＜現研のコンサルティング活動の特徴＞</br>
                1.潜在問題の摘出</br>
                2.解決方法の明示</br>
                3.実際的なシステムの設計</br>
                4.直接指導と定着化への展開</br>
                5.教育活動、人づくりとの一体化</br></p>
        </div>
    </section>

    <section class="consulting-container">
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/strategy-planning')); ?>">
                <h3>事業・経営構想、戦略策定</h3>
                <p>会社のビジョンに即して新経営を実現する重点戦略をどう構築するか<br>
                    どういう戦略で進めば、現在の局面に対応し、しかも将来のトレンドに参入できるかなどを策定します。</p>
            </a>
        </div>
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/business-model')); ?>">
                <h3>事業開発・ビジネスモデル改革</h3>
                <p>これから文章を書く</p>
            </a>
        </div>
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/project')); ?>">
                <h3>変革プロジェクト指導</h3>
                <p>これから文章を書く</p>
            </a>
        </div>
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/hr-system')); ?>">
                <h3>人事制度設計</h3>
                <p>これから文章を書く</p>
            </a>
        </div>
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/corporate-philosophy')); ?>">
                <h3>企業理念・行動指針の作成・リニューアル</h3>
                <p>これから文章を書く</p>
            </a>
        </div>
        <div class="consulting-item">
            <a href="<?php echo esc_url( home_url('/service/consulting/next-generation-manufacturing')); ?>">
                <h3>製造次世代化</h3>
                <p>これから文章を書く</p>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
