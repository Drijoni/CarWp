<?php
/* Template Name: Blog */

?>


<?php require( get_stylesheet_directory() . '/modified-navbar.php'); ?>

<br>
<br>
<h1 class="text-center">Blog Posts</h1>
<br>
<br>

<div class="container-fluid">

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 1, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<!-- rest of the loop -->
		<!-- the title, the content etc.. -->




<div class="card scard mb-3" style="">
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



   <?php endwhile; ?>
<!-- pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">

<li class="page-item"><?php next_posts_link(); ?></li>
<li class="page-item"><?php previous_posts_link(); ?></li>

      </ul>
</nav>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
<?php 


 ?>
    </div>
<?php get_footer();