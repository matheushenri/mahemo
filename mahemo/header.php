<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if( is_front_page() ) { bloginfo('name'); } else { echo the_title(); } ; ?></title>
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
                <?php echo esc_attr__( bloginfo( 'name' ) . ' > ' . the_title() ); ?>
            </div>            
        </div>
        <?php if( is_front_page() ) : ?>
            <header id="frontHeader">
                    <div>
                        <a href="#" class="showNav"><i></i></a>
                    </div>
                    <div>
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-mahemo.svg" alt="Logo Mahemo">
                        </a>
                    </div>
                    <div>
                        <svg id="Layer_1" viewBox="0 0 250 390" style="enable-background:new 0 0 250 390;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke:#FFFFFF;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                            .st1{fill:none;stroke:#FFFFFF;stroke-width:12;stroke-miterlimit:10;}
                        </style>
                        <g>
                            <path class="st0" d="M10,98.8c1.3-11.5,4.3-22.7,9.4-33.4c9.3-19.4,23.6-34,43-43.6c15.5-7.6,31.9-11.1,48.9-12.2
                                c1.1-0.1,2.1-0.4,3.2-0.5c6.3,0,12.6,0,18.9,0c7.4,1,14.9,1.6,22.2,3c20.2,3.7,38.4,11.7,53.3,26c15.8,15.2,24.9,34,28.2,55.6
                                c1.1,7,1.5,14.2,1.5,21.3c0.1,23.4,0.1,46.9,0.1,70.3"/>
                            <path class="st0" d="M238.8,203.6C238.8,204.3,238.8,203,238.8,203.6"/>
                            <path class="st0" d="M238.8,222c0,18.4,0,36.7,0,55.1c0,16.7-3,32.7-10.2,47.8c-9.3,19.3-23.4,33.9-42.8,43.3
                                c-22.1,10.8-45.7,13.5-70,12.6c-18.4-0.7-36.3-4.1-53-12.2c-22.8-11.1-38.2-28.8-47.1-52.4c-4.8-12.8-6.6-26.2-6.6-39.9
                                c0-51.8,0-103.6,0-155.3"/>
                            <path class="st1" d="M108.8,106.8c0,5.3-0.1,10.6,0,16c0.2,9.1,6.5,15.7,15,15.8c8.7,0.1,15.3-6.5,15.4-15.8
                                c0.1-10.4,0.1-20.8,0-31.2c-0.1-9.1-6.5-15.7-15-15.8c-8.7-0.1-15.2,6.6-15.4,15.8C108.7,96.7,108.8,101.7,108.8,106.8z"/>
                        </g>
                        </svg>
                    </div>
            </header>
        <?php else : ?>
            <header id="mainHeader">
                <h1><?php the_title(); ?></h1>                
            </header>
        <?php endif; ?>
       
      