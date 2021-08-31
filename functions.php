<?php

if(class_exists("Attachments")){
    require_once "lib/Attachments.php";
}




function saf_bootstraping(){
    load_theme_textdomain("saf");
    add_theme_support( "title-tag" );
    add_theme_support("post-thumbnails");
    $custom_header = array(

        "height" => 84,
        "width" => 84,

    );
    add_theme_support("custom-logo", $custom_header);
    register_nav_menu( "topmenu",__("main menu","saf"));
    $saf_custom_header_color = array(
        "header-text" => true,
        "default-custom-color" => "#222",
    );
    add_theme_support( "custom-header", $saf_custom_header_color);
add_theme_support("post-formats", array("aside", "gallery", "link", "image", "quote", "status", "video", "audio", "chat") );
add_theme_support( "custom-header", $saf_custom_header_color);

};

add_action( "after_setup_theme", "saf_bootstraping");

function assets(){
wp_enqueue_style( 'bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", null, '1.0' );
wp_enqueue_style( 'tns-style', "//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css",null, '1.0' );
wp_enqueue_style("style-css", get_stylesheet_uri());
wp_enqueue_style( "dashicons" );  
wp_enqueue_script("tns-js", "//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js",null,'1.0',true);
wp_enqueue_script("main-js", get_theme_file_uri("/js/main.js"),array("jquery"),'',true);

}
 add_action("wp_enqueue_scripts","assets");

 function saf_sidebar() {
    register_sidebar( 
        array(
        'name'          => __( 'singel page sidebar', 'saf' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'saf' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( 
        array(
        'name'          => __( 'footer-one', 'saf' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'saf' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( 
        array(
        'name'          => __( 'footer-two', 'saf' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'saf' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'saf_sidebar' );


function saf_menu_css_class($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;
}
 add_action( "nav_menu_css_class", "saf_menu_css_class",10,2 );

 function saf_custom_header_bg(){
    if (is_front_page()) {
        if(current_theme_supports( "custom-header")){
          ?> 
          <style>
             .hero{
                background: url(<?php header_image(); ?>);
                background-repeat: no-repeat;
                background-posittion: top;
                background-size: cover;
                 
             }
         </style>
 
             <?php
             
         }
     }
 }
 add_action( "wp_head", "saf_custom_header_bg", );
 