<aside class="aside-area">
    <p class="aside-area-search">検索</p>
    <div class="search-content">
        <?php get_template_part('searchform-post'); ?>
    </div>
    <div class="archive-month-wrap">
        <h3>月別アーカイブ</h3>
            <ul class="archive-list">
                <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
            </ul>
    </div>
    <div class="category-links">
        <h3>カテゴリー</h3>
        <ul>
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
</aside>