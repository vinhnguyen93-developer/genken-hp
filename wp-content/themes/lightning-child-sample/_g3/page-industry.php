<?php
/** 
 * Template Name:産業事情検討会
*/
?>
<?php get_header(); ?>

        <main>
            <h1 class="back-blue">産業事情検討会</h1>
            <div class="section-wrap">
                <section class="industry-contents">
                    <p>政策を策定するために重要な意思決定の基礎となる産業・社会の動向、情勢分析などを共同討議する隔月開催の定例会合です。
                        テーマに基づき、外部講師の方に基調講演をお願いしています。<br>
                        会員の皆様へは「産検リポート」として、会合後にサマリーをお送りしております。</p>
                
                    <h3>次回開催予定</h3>
                        <p>次回の開催は現在のところございません。</p>
                    <h3>開催テーマ・講師活動実績<span class="att">（所属・役職は当時）</span></h3>
               
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //$paged 変数: 現在のページ番号を取得.get_query_var('paged') が存在すればその値を、存在しなければ1を使用する
                        $think_args = array( //$args 配列: クエリのパラメータを設定
                            'post_type' => 'industry-activity', // カスタム投稿タイプのスラッグを指定
                            'posts_per_page' => 4, // 1ページに表示する記事の数
                            'paged' => $paged, //ページ番号を指定して、ページングを有効に
                        );
                        $archive_query = new WP_Query($think_args); //上記のパラメータを使用して、新しいWP_Queryオブジェクト（WordPressのクエリを実行するためのオブジェクト）を作成

                        if ($archive_query->have_posts()) : //クエリが投稿を持っているかどうかを確認。もし記事があれば、以下のループが実行
                            while ($archive_query->have_posts()) : $archive_query->the_post(); //投稿がある限り、各記事に対してループを実行。ループ内のコードは、各記事ごとに実行
                        ?>
                        <div class="theme-container">
                            <a href class="theme-list"<?php the_field('url'); ?>>
                                <div class="conference">
                                    <?php
                                    // カスタムフィールド 'year-month' から日付を取得
                                    $date_str = get_field('year-month', false, false);

                                    // 日付をDateTimeオブジェクトに変換
                                    $date = DateTime::createFromFormat('Ymd', $date_str);

                                    // フォーマットを変更して表示
                                    echo esc_html($date->format('Y.m.d'));
                                    ?>
                                </div>
                                <div class="conference">テーマ：<?php echo esc_html(the_field('theme')); ?></div>
                                <div class="conference">講&emsp;師：<?php echo esc_html(the_field('lecturer')); ?></div>
                            </a>
                        </div>
                        <?php wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>


                    <h3 class="past-theme-wrap">アーカイブ</h3>
                    <ul class="past-theme">
                        <li><a href="<?php echo esc_url( home_url('industry-activity')); ?>">2024年ー2020年</a></li>
                        <li><a href="<?php echo esc_url( home_url()); ?>">2019年ー2015年</a></li>
                        <li><a href="<?php echo esc_url( home_url()); ?>">2014年ー2000年</a></li>
                        <li><a href="<?php echo esc_url( home_url()); ?>">1999年ー1995年</a></li>
                        <li><a href="<?php echo esc_url( home_url()); ?>">1994年ー1990年</a></li>
                    </ul>
                </section>    


                <section class="application-wrap">    
                    <h3>申し込み方法</h3>
                    <div class="application">
                        <div class="application-text" >お問い合わせページ、もしくは、メールにてjimukyoku@gen-ken.co.jpまで、以下の事項を記載の上、ご連絡下さい。</div>
                        <ul>    
                            <li>申込セミナー名</li>
                            <li>貴社名</li>
                            <li>住所</li>
                            <li>電話番号</li>
                            <li>FAX番号</li>
                            <li>ご参加者氏名</li>
                            <li>部署名</li>
                            <li>役職名</li>
                            <li>E-mail</li>
                            <li>本セミナーをお知りなったきっかけ</li> 
                        </ul>
                        <div class="inquiry">
                            <p>ご不明点、ご質問等ございましたら、<br>
                                TEL:03-3813-7338<br>
                                E-mail:hongo@gen-ken.co.jp<br>
                                までお気軽にご連絡下さい。<br>
                            </p>
                        </div>
                    </div>
                </section> 
            </div>
        </main>      
<?php get_footer(); ?>
