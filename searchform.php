<form class="input-group form mt-3" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search" id="searchform">
    <div class="form-outline">
<input class="form-control"  type="text" name="s" placeholder="Search"  value="<?php echo get_search_query(); ?>">
</div>

<input type="hidden" name="post_type[]" value="cars" />
</form>