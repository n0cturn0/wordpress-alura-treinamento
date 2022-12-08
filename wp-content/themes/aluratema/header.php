<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <? wp_head(); ?>
</head>
<body>
<br><br>

<?php
the_custom_logo();
wp_nav_menu(
    array(
    'menu' => 'menu-navegacao'
    )
);  
