<br>
<br>
<h1 class="text-center">Latest Blog Post</h1>
<br>
<br>

<div class="container-fluid">

<?php
  $args = array( 'post_type' => 'post' , 'posts_per_page' =>1);
  $the_query = new WP_Query ($args);
  ?>
  <?php if($the_query-> have_posts()): ?>
  
  <?php while($the_query-> have_posts()): $the_query -> the_post(); ?>



<div class="card mb-3" style="">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php the_field('image');?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><b><?php the_title(); ?></b></h3>
        <p class="card-text"><?php the_content(); ?></p>
        
            <a  class="btn btn-md btn-dark"  href="<?php the_permalink();?>">Read More</a>

      </div>
    </div>
  </div>
</div>



    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>

    <?php else: ?>
      
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>


    </div>