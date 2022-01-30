<link rel="stylesheet" type="text/css" href="css/style1.css">

<!-- FEATURED CONTENT-->
<br>
<br>






<h1 class="text-center">Featured Cars</h1>
<br>
<br>
<br>

<div class="container-fluid">

<div class="row">

<?php
  $args = array( 'post_type' => 'cars' , 'posts_per_page' =>3);
  $the_query = new WP_Query ($args);
  ?>
  <?php if($the_query-> have_posts()): ?>
  
  <?php while($the_query-> have_posts()): $the_query -> the_post(); ?>

<div class="col-sm-4" >

  <div class="card scard h-100">
  

  <img class="card-img-top" src="<?php the_field('image');?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>

  </div>
       <a class="btn btn-sm btn-dark"  href="<?php the_permalink();?>">Read More</a>
</div>

</div>

<br>


    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>

    <?php else: ?>
      
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
    <?php endif; ?>

    
</div>
</div>

<br>
<br>