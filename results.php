<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search" id="searchform">
<input type="text" name="s" placeholder="Search"  value="<?php echo get_search_query(); ?>">
<input type="hidden" name="post_type[]" value="cars" />
</form>
