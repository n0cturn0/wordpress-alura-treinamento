<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/fonts.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/style.css' ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
   
</head>
<header class="section page-header">
<div class="rd-navbar-wrap">


    <?php 
    // wp_die(var_dump(get_registered_nav_menus('primary_menu')));
        wp_nav_menu( array(
           
            'theme_location'    => 'primary_menu',
            'container'         => 'nav',
            'container_class'    => 'rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true"',
           
           
            'menu_id'           => 'collapse'
            
        ));
     ?>
     
     </div>
</header>
</div>
<body>

