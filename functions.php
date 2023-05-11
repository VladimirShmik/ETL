<?php
/**
 * ETL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ETL
 */?>
<?php
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Главное меню' ),
            'mobile-menu' => __( 'Мобильное меню' ),
            'footer-menu' => __( 'Подвальное меню' ),

        )
    );
}
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
function custom_scripts() {
    wp_enqueue_style('bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), null, true );
}
function theme_name_scripts() {
    wp_enqueue_style( 'main-style ', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery-bundle', get_template_directory_uri() . '/js/jquery-3.6.4.min.js', array(), null, true );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>
