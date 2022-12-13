<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
   
</head>
<header>
    <?php 
    // wp_die(var_dump(get_registered_nav_menus('primary_menu')));
        wp_nav_menu( array(
           
            'theme_location'    => 'primary_menu',
            'container'         => 'nav',
            'container_class'    => 'primary_menuc',
           
           
            'menu_id'           => 'collapse'
            
        ));
    ?>
</header>
<body>

