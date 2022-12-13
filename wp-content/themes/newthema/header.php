<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <title><?php bloginfo('name'); ?></title>
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container-alura">
        <?php
        the_custom_logo();
        ?>
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'menu-navegacao',
                    'menu_id' => 'menu-principal'
                )
            );
            ?>
        </nav>
    </div>
</header>
