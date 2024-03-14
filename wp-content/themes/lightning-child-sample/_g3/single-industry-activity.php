<main class="single-main">
    <h1 class="single-title"><?php the_title(); ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="theme-container">
                <a href="<?php the_field('url'); ?>">
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
        <?php endwhile; ?>
    <?php endif; ?>
</main>
