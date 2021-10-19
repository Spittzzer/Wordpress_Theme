<?php 


function bilel_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    
}
add_action('after_setup_theme','bilel_theme_support');




function bilel_menus(){
    $locations = array(
        'primary'=>"Desktop Primary left sidebar",
        'Footer Menu'=>"Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','bilel_menus');






function bilel_register_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'bilel-theme-style', get_template_directory_uri() . '/style.css', array('bilel-theme-bootstrap'),$version,'all');
    wp_enqueue_style( 'bilel-theme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(),'4.4.1','all');
    wp_enqueue_style( 'bilel-theme-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(),'5.13.0','all');
    
}

add_action('wp_enqueue_scripts','bilel_register_styles');












function bilel_register_scripts(){
    wp_enqueue_script('bilel-theme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true );
    wp_enqueue_script('bilel-theme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0',true );
    wp_enqueue_script('bilel-theme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true );
    wp_enqueue_script('bilel-theme-main',get_template_directory_uri() . '/assets/js/main.js',array(),'1.0',true );
    

   
    
}

add_action('wp_enqueue_scripts','bilel_register_scripts');



function bileltheme_widget_areas(){


    register_sidebar( 
        
    array(
        'before title'=>'',
        'after titme'=>'',
        'beofre widget'=> '',
        'after widget'=> '',

        'name'=>'Sidebar Area',
        'id'=>'sidebar-1',
        'description'=>'Sidebar Widget Area'



    )
);


register_sidebar( 
        
    array(
        'before title'=>'',
        'after titme'=>'',
        'beofre widget'=> '',
        'after widget'=> '',

        'name'=>'Footer Area',
        'id'=>'footer-1',
        'description'=>'Footer Widget Area'



    )
);


}

add_action('widgets_init','bileltheme_widget_areas');






?>