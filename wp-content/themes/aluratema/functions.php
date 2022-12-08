<?php
//Função que registra menu
//Menu Aparencia 
function treinamento_registra_menu(){
    register_nav_menu('menu-navegacao', 'Menu navegação');
}
add_action('init','treinamento_registra_menu');