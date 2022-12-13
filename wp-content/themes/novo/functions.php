<?php
//https://www.youtube.com/watch?v=lgIW_2QO87o&ab_channel=TruthSeekers
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        'secundary_menu' => __( 'Secundary Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}