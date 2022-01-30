<link rel="stylesheet" type="text/css" href="css/style1.css">

<?php
require 'modified-navbar.php';?>




<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href=".../css/error.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span>0</span>4</h1>
			</div>
			<h2>the page you requested could not found</h2>
			<!--form class="notfound-search">
				<input type="text" placeholder="Search...">
				<button type="button"><span></span></button>
			</form-->

      <div class="page-content">
          <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'CarWp' ); ?></p>


<center>
     <form class="form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search" id="searchform" style="margin-right:3%;">
    <div class="form-outline">
<input class="form-control"  style="width: 300px" type="text" name="s" placeholder="Search"  value="<?php echo get_search_query(); ?>">
</div>

<input type="hidden" name="post_type[]" value="cars" />
</form>
</center>

        </div>
		</div>
	</div>

<?php get_footer();