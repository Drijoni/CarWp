<link rel="stylesheet" type="text/css" href="css/style1.css">
<?php require 'modified-navbar.php';?>


<br>


<form method="GET" class="form-inline ml-2">


  <?php

  $terms = get_terms([
    'taxonomy' => 'type',
    'hide_empty' => false
  ]);

  foreach ($terms as $term) :

  ?>

  <label class="form-control ml-2">

      <input
        type="checkbox"
        name="type[]"
        value="<?php echo $term->slug; ?>"
        <?php checked(
          (isset($_GET['type']) && in_array($term->slug, $_GET['type']))
        ) ?>
      />

      <?php echo $term->name; ?>

    </label>

  <?php endforeach; ?>
  
  
  <button class="ml-2 btn btn-primary" type="submit">Filter</button>

</form>


<div class="container-fluid">

<div class="row">



<!-- 'type'=>'mercedes' -->


 <?php 


 $args = array('post_type'=>'cars','type'=>$type);



  $the_query = new WP_Query ($args);
  ?>



  <?php if($the_query-> have_posts()): ?>
  
  <?php while($the_query-> have_posts()): $the_query -> the_post();  ?>

<div class="col-sm-4 d-flex">
  <div class="scard card " style="width: auto;">
  

  <img class="card-img-top" src="<?php the_field('image');?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
    <a style="margin-top: 10px;" class="btn btn-dark"  href="<?php the_permalink();?>">Read More</a>
</div>
</div>

</div>


    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>

    <?php else: ?>
    


 

      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    
    <?php endif; ?>

</div>
 <?php 

the_posts_pagination( array(
  'mid_size'  => 2,
  'prev_text' => __( 'Back', 'textdomain' ),
  'next_text' => __( 'Onward', 'textdomain' ),
) );
 ?>
</div>
<?php
get_footer();