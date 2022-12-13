<?php
//Funcao que registra a logo
function treinamento_adicionando_recursos(){
    add_theme_support('custom-logo');
    
}
add_action('after_setup_theme','treinamento_adicionando_recursos');


//Função que registra menu
//Menu Aparencia 
function treinamento_registra_menu(){
    register_nav_menu('menu-navegacao', 'Menu navegação');
}
add_action('init','treinamento_registra_menu');