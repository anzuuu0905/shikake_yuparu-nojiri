<form action="<?php echo home_url(); ?>" class="search_container">
	<input type="text" id="search" name="s" size="25" placeholder="キーワード検索" value="<?php the_search_query(); ?>">
  <input type="submit" value="&#xf002">
	<!-- <input type="image" src="<?php echo get_template_directory_uri(); ?>/image/search_icon.png"> -->
</form>