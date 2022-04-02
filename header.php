<!doctype html>
<html class="loaded" lang="ru">
<head>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF76QPH');</script>
<!-- End Google Tag Manager -->
	
    <meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <style>
        [data-aos]{opacity:0;}
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/assets/css/main.css">  
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/assets/css/aos.css">  
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/assets/css/widget.css">  
    <?php
        wp_head();
    ?>
</head>
<body>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF76QPH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	

<div class="page-container">

<!-- BEGIN HEADER -->
<header class="header">
    <div class="header__main wrapper">
        <div class="header__cols">
            <div class="header__left">
                <a class="header-logo" href="<?php echo get_home_url(); ?>" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                    <img class="header-logo__image" src="<?php the_field('header_logo_image'); ?>" alt="">
                    <h1 class="header-logo__title-wrap">
                        <span class="header-logo__title"><?php the_field('header_logo_title'); ?></span>
                        <span class="header-logo__text"><?php the_field('header_logo_text'); ?></span>
                    </h1>
                </a>
            </div>
            <div class="header__right" data-aos="fade-left" data-aos-duration="800" data-aos-delay="500">
                <a class="header__button button button_green-border js-scrolltoid" href="<?php the_field('header_green_button_url'); ?>">
                    <span class="button__text"><?php the_field('header_green_button_text'); ?></span>
                </a>
                <a class="header__button button js-scrolltoid btn_where_to_buy" href="<?php the_field('header_orange_button_url'); ?>">
                    <span class="button__text"><?php the_field('header_orange_button_text'); ?></span>
                </a>                        
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->  