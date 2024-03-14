<?php get_header(); ?>

<main class="industry-theme">
    <h1>産業事情検討会テーマ・講師活動実績</h1>

    <?php
    // 年代ごとにアーカイブをグループ化するための空の配列
    $archive_by_decade = array();

    $args = array(
        'post_type' => 'industry-activity', // カスタム投稿タイプのスラッグを指定
    );
    $archive_query = new WP_Query($args);

    if ($archive_query->have_posts()) :
        while ($archive_query->have_posts()) : $archive_query->the_post();

            // カスタムフィールド 'year-month' から年を取得
            $year_month = get_field('year-month', false, false);
            $date = DateTime::createFromFormat('Ymd', $year_month);

            // 年代を計算 (例: 2024 → 2020)
            $decade = floor($date->format('Y') / 5) * 5;

            // 年代ごとにアーカイブをグループ化
            $archive_by_decade[$decade][] = array(
                'url'     => get_field('url'),
                'number'  => get_field('number'),
                'theme'   => get_field('theme'),
                'lecturer' => get_field('lecturer'),
                'date'    => $date->format('Y.n.j'), // 年月日を指定した形式に変換
            );

        endwhile;

       // 年代ごとにループ
       foreach ($archive_by_decade as $decade => $archive) :
        // 表示範囲を調整
        if ($decade >= 2020) {
            $end_year = $decade + 4;
            $start_year = $decade;
        }
?>
        <section class="decade-archive">
            

            <?php foreach ($archive as $item) : ?>
                    <div class="theme-container">
                        <a href="<?php echo esc_url($item['url']); ?>">
                            <div class="conference"><?php echo esc_html($item['number']); ?>&emsp;<?php echo esc_html($item['date']); ?></div>
                            <div class="conference">テーマ：<?php echo esc_html($item['theme']); ?></div>
                            <div class="conference">講&emsp;師：<?php echo esc_html($item['lecturer']); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </section>
    <?php
        endforeach;
    endif;
    wp_reset_postdata(); // カスタムクエリをリセット
    ?>

</main>

<?php get_footer(); ?>
