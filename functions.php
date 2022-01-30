<?php 


/*function add_theme_scripts() {
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');

	if(is_singular()&&comments_open()&&get_option('thread_comments')){
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','add_theme_scripts');
*/



/*   Enqueue Scripts */
function add_theme_scripts() {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css',array());
wp_enqueue_style('style1',get_stylesheet_directory_uri().'/css/style1.css', array(), rand(111,9999), 'all');

wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'), '20120206', true );
wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '20120206', true);
}
add_action('wp_enqueue_scripts','add_theme_scripts');
	


function carwp_setup(){

    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Navigation');	
 
}

add_action('init','carwp_setup');

//wp_nav_menu(array('theme_location'=>'primary'));
add_theme_support('post-formats',array('aside','image', 'video', 'quote'));

function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer menu' ));
}

add_action( 'init', 'register_my_menu' );




function carwp_enqueue_styles(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'carwp_enqueue_styles');

 function carwp_enqueue_scripts(){
 	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery') );

 }
 add_action('wp_enqueue_scripts', 'carwp_enqueue_scripts');




/*add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/sorting.js', '', '', true);
});
*/


 require('navbar_walker.php');







function create_posttype(){
	register_post_type('Cars',
		array(
			'labels' => array(
				'name' => __('Cars'),
				'singular_name' => __('Car'),
			),
			'public' => true,
			'publicly_queryable' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'cars'),
			'show_in_rest' => true,
			'menu_icon'   => 'dashicons-car',

		)
	);
}
add_action('init','create_posttype'); 

function register_taxonomy_car_brands()
{

$labels = [
'name' => _x('Car brand', 'taxonomy general name'),
'singular_name' => _x('Car brand','taxonomy singular name'),
'search_items' => __('Search Car brand'),
'all_items' => __('All car brands'),
'parent_item' => __('Parent Car brand'),
'parent_item_colon' => __('Parent Car brand'),
'edit_item' => __('Edit car brand'),
'update_item' => __('Update car brand'),
'add_new_item' => __('Add New Car brand'),
'new_item_name' => __('New Car brand Name'),
'menu_name' => __('Car brand'),




];

$args = [
'hierarchical'     => true,
'labels'           => $labels,
'show_ui'          => true,
'show_admin_column'=> true,
'query_var'        => true,
'rewrite'          => ['slug' => 'car_brand'],


];



register_taxonomy('type', array('cars'), $args);

register_taxonomy('cartags', 'cars', array(
//'show_in_rest'=> true,
'label' => 'Car Tags',
'rewrite' => array('slug' => 'car_tags'),
'hierarchical'=> false

));



}


add_action('init', 'register_taxonomy_car_brands');



 function themename_widgets_init(){
	register_sidebar(array(
		'name'          => __('Primary Sidebar', 'theme_name'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<br>'.'<h3 class= "widget-title">',
		'after_title'   => '</h3>',

	) );
	register_sidebar(array(
		'name'          => __('Secondary Sidebar', 'theme_name'),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<br>'.'<h3 class= "widget-title">',
		'after_title'   => '</h3>',

	) );
}
add_action('widgets_init','themename_widgets_init');

class My_Widget extends Wp_Widget {

  public function __construct() {
    
  }
    public function widget($args, $instance) {

  }
  public function form($instance) {

  }
  public function update($new_instance, $old_instance) {

  }
}

add_action('widget_init', 'wpdocs_register_widgets');

function wpdocs_register_widgets() {
  register_widget('My_Widget');
}








  function wpb_customize_register($wp_customize){

 $wp_customize->add_section('header', array(
      'title'   => __('Header', 'carwp'),
      'description' => sprintf(__('Options for header','carwp')),
      'priority'    => 130
    ));

$wp_customize->add_setting( 'header_textcolor' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

$wp_customize->add_control('header_textcolor', array(
      'label'   => __('Header Text Color', 'carwp'),
      'default-text-color'     => '',
      'section' => 'header',
      'priority'  => 1
    ));


$wp_customize->add_setting( 'sitetitle_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

$wp_customize->add_control('sitetitle_color', array(
      'label'   => __('Site Title Color', 'carwp'),
      'default-text-color'     => '',
      'section' => 'header',
      'priority'  => 2
    ));



$wp_customize->add_setting( 'description_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

$wp_customize->add_control('description_color', array(
      'label'   => __('Description Color', 'carwp'),
      'default-text-color'     => '',
      'section' => 'header',
      'priority'  => 3
    ));




    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Hero', 'carwp'),
      'description' => sprintf(__('Options for showcase','carwp')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => 'default.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'carwp'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'carwp'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Write something', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'carwp'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('#', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'carwp'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Click Showcase on Customizer', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'carwp'),
      'section' => 'showcase',
      'priority'  => 5
    ));


/// Footer

  $wp_customize->add_section('footer', array(
      'title'   => __('Footer', 'carwp'),
      'description' => sprintf(__('Options for footer','carwp')),
      'priority'    => 130
    ));

  $wp_customize->add_setting('company_name', array(
      'default'   => _x('Company Name', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('company_name', array(
      'label'   => __('Company Name', 'carwp'),
      'section' => 'footer',
      'priority'  => 1
    ));


     $wp_customize->add_setting('company_text', array(
      'default'   => _x('You can put some text here about your company', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('company_text', array(
      'label'   => __('Company Name', 'carwp'),
      'section' => 'footer',
      'priority'  => 2
    ));


 $wp_customize->add_setting('company_address', array(
      'default'   => _x('Company Address', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('company_address', array(
      'label'   => __('Address', 'carwp'),
      'section' => 'footer',
      'priority'  => 3
    ));





 $wp_customize->add_setting('company_email_address', array(
      'default'   => _x('youraddress@mail.domain', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('company_email_address', array(
      'label'   => __('Email Address', 'carwp'),
      'section' => 'footer',
      'priority'  => 4
    ));




 $wp_customize->add_setting('company_phone_number', array(
      'default'   => _x('+38344******', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('company_phone_number', array(
      'label'   => __('Phone Number', 'carwp'),
      'section' => 'footer',
      'priority'  => 5
    ));


/// Social Media



$wp_customize->add_section('social_media', array(
      'title'   => __('Social Media', 'carwp'),
      'description' => sprintf(__('Options for social media','carwp')),
      'priority'    => 130
    ));


 $wp_customize->add_setting('facebook', array(
      'default'   => _x('http://facebook.com', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('facebook', array(
      'label'   => __('Facebook', 'carwp'),
      'section' => 'social_media',
      'priority'  => 1
    ));





 $wp_customize->add_setting('twitter', array(
      'default'   => _x('http://twitter.com', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('twitter', array(
      'label'   => __('Twitter', 'carwp'),
      'section' => 'social_media',
      'priority'  => 2
    ));



 $wp_customize->add_setting('google', array(
      'default'   => _x('http://google.com', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('google', array(
      'label'   => __('Google', 'carwp'),
      'section' => 'social_media',
      'priority'  => 3
    ));



 $wp_customize->add_setting('linkedin', array(
      'default'   => _x('http://linkedin.com', 'carwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('linkedin', array(
      'label'   => __('Linked In', 'carwp'),
      'section' => 'social_media',
      'priority'  => 4
    ));


  }


  add_action('customize_register', 'wpb_customize_register');




 



function wcr_related_posts($args = array()) {
    global $post;

    // default args
    $args = wp_parse_args($args, array(
        'post_id' => !empty($post) ? $post->ID : '',
        'taxonomy' => 'type',
        'limit' => 3,
        'post_type' => !empty($post) ? $post->post_type : 'post',
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    // check taxonomy
    if (!taxonomy_exists($args['taxonomy'])) {
        return;
    }

    // post taxonomies
    $taxonomies = wp_get_post_terms($args['post_id'], $args['taxonomy'], array('fields' => 'ids'));

    if (empty($taxonomies)) {
        return;
    }

    // query
    $related_posts = get_posts(array(
        'post__not_in' => (array) $args['post_id'],
        'post_type' => $args['post_type'],
        'tax_query' => array(
            array(
                'taxonomy' => $args['taxonomy'],
                'field' => 'term_id',
                'terms' => $taxonomies
            ),
        ),
        'posts_per_page' => $args['limit'],
        'orderby' => $args['orderby'],
        'order' => $args['order']
    ));

    include( locate_template('related-posts-template.php', false, false) );

    wp_reset_postdata(); }