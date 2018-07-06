<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri (); ?>/dist/img/public/favicon.png" rel="shortcut icon"  >

    <title> Тестовая работа   </title>

    <?php wp_head(); ?>
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

</head>

<body id="body" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage" >
<header class="headerMain" itemscope itemtype="http://schema.org/WPHeader">

    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/header.png">


        <!-- ================== NAVBAR ================ -->
        <nav  role="navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">


        </nav>

    </div>

    <!-- ================== END  NAVBAR ================ -->
</header>
