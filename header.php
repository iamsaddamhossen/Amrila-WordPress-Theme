<?php

/**
 * Header files
 * @package Amrila
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class('hello-class'); ?>>

    <?php 

    if(function_exists('wp_body_open')) {
        // This function is used to ensure that the body open hook is called
        // which allows plugins to inject content right after the opening body tag.
        wp_body_open(); 

    }
    
    
    ?>

    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part( '/template-parts/header/nav' ); ?>
        </header>

        <div id="content" class="site-content">