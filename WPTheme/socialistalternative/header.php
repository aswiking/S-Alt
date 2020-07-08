<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
        <title>Socialist Alternative</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">
        <script defer src="<?php echo get_bloginfo('template_directory'); ?>/resources/fontawesome/js/all.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="salt-mainheader">
            <h1>
                <a href="<?php echo get_bloginfo("wpurl"); ?>">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/SA-logo-full-yellow.svg" alt="Socialist Alternative">
                </a>    
            </h1>
            
            <input class="menu-btn" type="checkbox" id="menu-btn" /> 
            <label class="menu-icon" for="menu-btn">
            <i class="fas fa-bars"></i>
            </label>

            <form class="salt-mainsearch" action="<?php echo get_bloginfo("wpurl"); ?>" method="GET">
				<input name="search" placeholder="Search...">
			</form>
            <nav class='menu'>
                <label for="menu-btn" class='menu-close-btn'> 
                <i class="fas fa-times"></i>
                </label>
                <?php wp_nav_menu(array('theme_location' => 'main-navbar')); ?>
            </nav>
        </header>
        <div class="salt-bodycontainer">
