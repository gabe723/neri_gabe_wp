<?php
//child theme functions ADD on to the parent's functions.php file
//technically, the child functions run first

add_action( 'wp_enqueue_scripts', 'child_scripts' );
function child_scripts()
{
  wp_enqueue_style( 'parent-css', get_template_directory_uri() . '/style.css' );
}

//add an additional footer widget area
add_action( 'widgets_init', 'child_widget_area' );
function child_widget_area()
{
  register_sidebar( array(
    'name'          => 'Footer Area',
    'id'            => 'footer-area',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}

//example pluggable function usage
function twentysixteen_fonts_url()
{
  return urlencode('https://fonts.googleapis.com/css?family=Lato');
}
//no close PHP
