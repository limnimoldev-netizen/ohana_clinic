<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>
    <header>
        
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php bloginfo('clinic'); ?>">
        </div>
        <nav class="menu-items">
            <?php wp_nav_menu(['theme_location'=>'primary', 
            'menu_class'     => 'menu',
        
            ]); ?>
        </nav>
    </header>

    

<main>
