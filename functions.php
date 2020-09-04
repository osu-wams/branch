<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'twentytwenty-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap', false );}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Beaver Orange', 'branch' ),
            'slug' => 'beaver-orange',
            'color' => '#d73f09',
        ),
        array(
            'name' => __( 'Paddletail Black', 'branch' ),
            'slug' => 'paddletail-black',
            'color' => '#000',
        ),
        array(
            'name' => __( 'Bucktooth White', 'branch' ),
            'slug' => 'bucktooth-white',
            'color' => '#fff',
        ),
        array(
            'name' => __( 'Pine Stand', 'branch' ),
            'slug' => 'pine-stand',
            'color' => '#4a773c',
        ),
        array(
            'name' => __( 'High Tide', 'branch' ),
            'slug' => 'high-tide',
            'color' => '#00859B',
        ),
        array(
            'name' => __( 'Luminance', 'branch' ),
            'slug' => 'luminance',
            'color' => '#FFB500',
        ),
        array(
            'name' => __( 'Stratosphere', 'branch' ),
            'slug' => 'stratosphere',
            'color' => '#006A8E',
        ),
        array(
            'name' => __( 'Rogue Wave', 'branch' ),
            'slug' => 'rogue-wave',
            'color' => '#0D5257',
        ),
        array(
            'name' => __( 'Star Canvas', 'branch' ),
            'slug' => 'star-canvas',
            'color' => '#003B5C',
        ),
        array(
            'name' => __( 'Moon Dust Blue', 'branch' ),
            'slug' => 'moon-dust-blue',
            'color' => '#C6DAE7',
        ),
        array(
            'name' => __( 'Reindeer Moss Green', 'branch' ),
            'slug' => 'moss-green',
            'color' => '#C4D6A4',
        ),
        array(
            'name' => __( 'Neutral Grey', 'branch' ),
            'slug' => 'neutral-grey',
            'color' => '#e6e6e6',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features', 100 );
    
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-gradients' );
add_theme_support('editor-gradient-presets', []);