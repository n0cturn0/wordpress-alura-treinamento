<?php 

function registra_menu(){
    register_nav_menu('menu-navegacao', 'Menu navegação');
}
add_action('init','registra_menu');