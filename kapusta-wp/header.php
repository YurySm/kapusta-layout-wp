<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title('|') ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head();?>
</head>
<body>
    <header>

        <div class="container">        
            <a href="<?php echo get_home_url(); ?>" class="logo__link">
                <img src="<?php
                    $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                    // выводим
                    echo $custom_logo__url[0];                
                ?>" alt="logo" class="logo__img">
            </a>
            <h1 class="header__title">Йога и творческое развитие для мам с детьми</h1>
            <a href="<?php echo bloginfo('template_url'); ?>/template/raspisanie/" class="header__btn">Расписание</a>
            <div class="header__img_inner">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/3-cat-01-1.gif" alt="cat">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/1-cat-01.gif" alt="cat"> 
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/2-cat-01.gif" alt="cat">     
            </div>
            
                    
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/header/header-line.png" alt="line" class="header__line">
            <nav>
                <?php 
                    wp_nav_menu( [
                        'menu'            => 'Main', 
                        'container'       => false, 
                        'menu_class'      => 'menu__items', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__items">%3$s</ul>',
                        'depth'           => 1

                    ] );
                ?>
            </nav>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>