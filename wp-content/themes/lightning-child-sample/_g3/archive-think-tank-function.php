<?php get_header(); ?>
<main>
    <section class="think-tank-function-title">
        <h1><img id="think-tank-function-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/syakaiteigen.png" alt="社会提言ページ画像"></h1>
        <div class="border-only"></div>
    </section>

    <section class="think-tank-function-wrap">
        <div class="think-tank-function-contents">
            <h2>社会提言</h2>
            <ul>
                <li>企業価値の創造と創出</li>
                <li>マルティ・リレーショナルな産業・社会の研究</li>
                <li>好不況の促進ファクターの検討</li>
                <li>各最先端技術の進度の推定</li>
                <li>海外を含む日本企業の事業機能の最適配置の研究</li>
            </ul>
            <p>広く事業環境を展望し、深く事業環境の本質とトレンドを見極め、新しいビジネスマネジメントツールを基礎から研究開発しています。<br>
            各社の長期構想、現在判断に貢献するため、日常のコンサルティング活動とは別に上記の主題のリサーチをし、基礎研究を積み上げています。</p>
        
            <div class="research">    
                <h2>リサーチ・レポート</h2>
                <p>広く事業環境を展望し、<br>深く事業環境の本質とトレンドを見極め、<br>新しいビジネスマネジメントツールを基礎から研究開発しています。</p>
                <p>各社の長期構想、現在判断に貢献するため、日常のコンサルティング活動とは別に下記の主題のリサーチをし、基礎研究を積み上げています。</p>
                <p>企業価値の創造と創出<br>マルティ・リレーショナルな産業・社会の研究<br>好不況の促進ファクターの検討<br>各最先端技術の進度の推定<br>海外を含む日本企業の事業機能の最適配置の研究<br>ネクスト商品個別研究</p> 
                <p>現研メンバーが自らの足で調査・研究した時事・経済等の問題についてリサーチ・レポートとしてまとめました。<br>
                「働き方改革からの人材政策の展開」」（2018年2月）</p>
            </div>
        </div>
    </section>


    <section class="research-report-container-wrap">
        <div class="research-report-contents">
            <h3>＜事例＞</h3>
            
            
              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //$paged 変数: 現在のページ番号を取得.get_query_var('paged') が存在すればその値を、存在しなければ1を使用する
                $think_args = array( //$args 配列: クエリのパラメータを設定
                    'post_type' => 'think-tank-function', // カスタム投稿タイプのスラッグを指定
                    'posts_per_page' => 3, // 1ページに表示する記事の数
                    'paged' => $paged, //ページ番号を指定して、ページングを有効に
                );
                $archive_query = new WP_Query($think_args); //上記のパラメータを使用して、新しいWP_Queryオブジェクト（WordPressのクエリを実行するためのオブジェクト）を作成

                if ($archive_query->have_posts()) : //クエリが投稿を持っているかどうかを確認。もし記事があれば、以下のループが実行
                    while ($archive_query->have_posts()) : $archive_query->the_post(); //投稿がある限り、各記事に対してループを実行。ループ内のコードは、各記事ごとに実行
                ?>

                
                
                <!-- ループさせるコンテンツ  -->
               

                <div class="research-report-container">
                    <div class="research-report-item">
                        <a href="<?php the_field('url'); ?>" target="_blank">
                            <h2><?php the_field('subject'); ?></h2>
                            <p><?php the_field('overview'); ?></p>
                        </a>
                    </div>
                </div>

               
                <?php endwhile; endif; ?>

                <div class="nav-links">
                    <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links([
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => 'page/%#%/',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $archive_query->max_num_pages,
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
        </div>
    </section>
    
    <section class="books-intro-wrap">
        <h3>書籍</h3>
        <div class="books-intro-container">
            <div class="books-intro-item">
                <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/book-project.png" alt="書籍経営プロジェクト講座画像">
                <p class="books-intro-title">実践「経営プロジェクト講座」</p>
                <p class="books-intro-okuduke">著者:鈴木成裕<br>出版社:プレジデント社<br>定価:1680円（税込）</p>
            </div>
            <div class="books-intro-item">
                <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/book-kodokouryo.png" alt="書籍行動綱領画像">
                <p class="books-intro-title">行動綱領」で創りだす新しい企業価値</p>
                <p class="books-intro-okuduke">著者:大槻裕志<br>出版社:プレジデント社<br>定価:1900円+税込</p>
            </div>
            <div class="books-intro-item">
                <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/book-kosoryoku.png" alt="書籍構想力の育て方画像">
                <p class="books-intro-title">「構想力」の育て方</p>
                <p class="books-intro-okuduke">著者:鈴木成裕<br>出版社:プレジデント社<br>定価:1400円+税込</p>
            </div>
        </div>
    </section>
   
</main>
<?php get_footer(); ?>
