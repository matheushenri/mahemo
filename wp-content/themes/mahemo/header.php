<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if( is_front_page() ) { bloginfo('name'); } else {} ; ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="navigation">
    <div class="inner">
        <?php wp_nav_menu( 'theme_location', 'main-menu' ); ?>
    </div>
</nav>
<div id="wrapper">
    <div class="inner">
        <div class="col-12">
            <div class="breadcrumb">
                <?php echo esc_attr__( bloginfo( 'name' ) ); ?>
            </div>            
        </div>
        <?php if( is_front_page() ) : ?>
            <header id="frontHeader">
                <div class="container">
                    <div>
                        <a href="#" class="showNav"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-icon.svg" alt=""></a>
                    </div>
                    <div>
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-mahemo.svg" alt="Logo Mahemo">
                        </a>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mouse-scroll.svg" alt="Scroll Down">
                    </div>
                </div>
            </header>
        <?php else : ?>
            <h1>Não é front-page</h1>
        <?php endif; ?>
       
      