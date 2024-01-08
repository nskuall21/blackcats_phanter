<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/********************************************************
            Soportes a Imagenes Thema
**********************************************************/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
require get_template_directory().'/inc/librerias/mobil_detect/Mobile_Detect.php';
/********************************************************
                     Registro de stylos
**********************************************************/
function blackcats_enqueue_styles() {
    // Enqueue de la hoja de estilos principal
    wp_enqueue_style( 'blackcats-css', get_stylesheet_uri() );
    // Enqueue de tu hoja de estilos personalizada
    wp_enqueue_style( 'maya-reset', get_template_directory_uri() . '/inc/librerias/maya-grip/maya-reset.css', array(), '1.0.0' );
    wp_enqueue_style( 'maya-grip', get_template_directory_uri() . '/inc/librerias/maya-grip/mayagrip-min.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'blackcats_enqueue_styles' );

/********************************************************
                     Registro de Menus
**********************************************************/
function blackcats_teme_menus(){
	// registro de menis de la plantilla
        register_nav_menus( array (
            'primary_menu'=>__('Menu Primary','blackcats'),
            'menu_social'=>__('Menu Social','blackcats'),
        ));
	}
	add_action('init', 'blackcats_teme_menus');
	/* ---- filtro para añadir clases al menu --- */
	 function blackcats_teme_menu_classes($classes, $item, $args){
				if ($args->theme_location == 'primary_menu')
					{
						$classes[] = 'bk-li';
					}
				return $classes;
			}    
	add_filter('nav_menu_css_class', 'blackcats_teme_menu_classes',1,3);


function blackcats_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'blackcats_woocommerce_support' );

/********************************************************
             soporte para migas de pan
**********************************************************/
add_theme_support( 'yoast-seo-breadcrumbs' );

// Cambiar el pie de pagina del panel de Administración
function change_footer_admin() {  
    echo '&copy;2018 -'. date("Y")  .' Copyright Skuall Studio. Todos los derechos reservados - Thema creado por <a href="https://www.skuallstudio.com">Skuall Studio</a>';  
}  
add_filter('admin_footer_text', 'change_footer_admin');
