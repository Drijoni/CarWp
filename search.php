<?php require 'modified-navbar.php' ?>
<?php  
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        ?>
        <div class="d-flex" style="display: flex;">
          <?php
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>

<div class="card mr-3" style="width: 18rem;">
  <img class="card-img-top" src="<?php the_field('image');?>" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
   
  </div>
</div>

                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
</div>
<?php get_footer();