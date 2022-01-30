<?php wp_head(); ?>
<!DOCTYPE html>
<html>
<head>
  
<style type="text/css">
span[itemprop="name"]{
   color: <?php echo get_theme_mod( 'header_textcolor' );?>;
}

 span[itemprop="name"]:hover{
  transition: .5s;
  color: red;?>;
}

.main_sitetitle{
  color: <?php echo get_theme_mod( 'sitetitle_color' );?>;
}


.main_description {
  color: <?php echo get_theme_mod( 'description_color' );?>;
}

</style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Car Wp</title>
  



</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--fontawesome-->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    


 <div class="card-overlay">

  <nav class="editnav navbar navbar-expand-sm wp-head-callback" role="navigation">
  <!--a class="navbar-brand" href="#">Navbar</a-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span style="color: white"><i class="fas fa-bars"></i></span>
    </button>
    <div class="row">
  <h1 class="main_sitetitle"><?php bloginfo( 'name' ); ?></h1>
  <h6 class="main_description"><?php bloginfo( 'description' ); ?></h6>
  &nbsp
  &nbsp
  &nbsp
  &nbsp
  &nbsp
  &nbsp
  &nbsp

    </div>

    <?php
        wp_nav_menu( array(

            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse ',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav h4',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <div class="col-4"><?php get_search_form();?></div>
        

        
</div>

</nav> 
<body>