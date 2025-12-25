<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>
    <header>
        <?php wp_nav_menu(['theme_location'=>'primary', 
        'menu_class'     => 'menu',
        
    ]); ?>
    
    </header>

    

<main>
