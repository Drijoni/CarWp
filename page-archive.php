<?php
/* Template Name: Archives*/ 

?>


<?php require( get_stylesheet_directory() . '/modified-navbar.php'); ?>
<?php 
 // the query
 $wpb_all_query = new WP_Query(array('post_type'=>'post', 
 'post_status'=>'publish')); ?>


<h1><?php the_title();?>: Posts</h1>


<?php if ( $wpb_all_query->have_posts() ) : ?>


<div class="container-fluid">


<div class="row">


    <!-- the loop -->

 

    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

      
 <div class="col-sm-4">
  <div class="card h-100" style="width: auto;">


  <img class="card-img-top" src="<?php the_field('image');?>" alt="thumbnail">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
    <a style="margin-top: 10px;" class="btn btn-dark"  href="<?php the_permalink();?>">Read More</a>
  </div> 

</div>

</div>

    <?php endwhile; ?>
    <!-- end of the loop -->

<?php the_posts_pagination(); ?>
</div>
 
    <?php wp_reset_postdata(); ?>

<?php else : ?> 

    <h5>by <?php echo get_the_author(); ?></h5>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</div>

<?php get_footer();