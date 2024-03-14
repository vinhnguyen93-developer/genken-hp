<form method="get" id="post-search" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" name="s" class="post-searchfield" value="<?php the_search_query(); ?>"/>
  <input type="hidden" name="post_type" value="post" /> <!-- デフォルト投稿に絞り込む -->
  <button type="submit" id="post-submit">
    <span>
      <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/musimegane.png" alt="Search icon">
    </span>
  </button>
</form>