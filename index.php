<link rel="stylesheet" type="text/css" href="css/style1.css">

<style type="text/css">
	
	.hero{
		 background:url(<?php echo get_theme_mod('showcase_image'); ?>) no-repeat center center;
	}


</style>

 <section class="hero">
<nav>
  <?php get_header();?>
</nav>
  <div class="hero-text">
    
   <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text','This'); ?></p>
    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-dark btn-md"><?php echo get_theme_mod('btn_text', 'Click Showcase on Customizer'); ?></a>

</section>

<!--Featured Content-->
<?php get_template_part('inc/cars','page'); ?>



<!--Newsletter-->

<?php get_template_part('inc/newsletter','page');?>




<!-- Blog Posts -->

<?php get_template_part('inc/posts','page');?>




<br>
<br>
<?php get_footer();