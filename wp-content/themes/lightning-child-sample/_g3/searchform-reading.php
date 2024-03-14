<form method="get" id="reading-search" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" name="s" class="reading-searchfield" value="<?php the_search_query(); ?>"/>
  <input type="hidden" name="post_type" value="reading" /> <!-- カスタム投稿に絞り込む -->
  <button type="submit" id="reading-submit">
      <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/musimegane.png" alt="Search icon">
  </button>
</form>


