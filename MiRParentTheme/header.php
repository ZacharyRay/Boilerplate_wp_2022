<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="fc9ba888-8d4b-4340-ac93-eb99d60c5fec" data-blockingmode="auto" type="text/javascript"></script>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/cb360c3535.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/oif1hqx.css">
</head>
<body <?php body_class(); ?>>

<header class="header"> 
    <div class="header_container">
        <div class="header__logo">
            <?php 
            /*     $img = get_field('firma_logo', 'option');
                if($img):
                    echo '<a href="'.get_bloginfo('url').'" id="logo">'.wp_get_attachment_image( $img, 'full').'</a>';
                endif; */
            ?>
        </div>
        <div class="header__menu">
        <?php
            // check to see if the logo exists and add it to the page
            if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
            <a href="https://www.mobile-industrial-robots.com/">
                <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
            </a>
            

            <?php // add a fallback if the logo doesn't exist
            else : ?>

            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

            <?php endif; ?>

            <?php  wp_nav_menu(array(
                'menu' => 'Header menu',
                'theme_location' => 'header_menu',
                'menu_class'=> 'menu menu--vertical', 
                'container' => '')
                ); ?>
        </div>
       
    </div>
</header>

<div class="content-wrapper">