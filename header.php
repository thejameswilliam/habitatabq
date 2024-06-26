<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                echo ' : ';
            } ?><?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>"/>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        


        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#00afd7">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
        <meta name="msapplication-TileColor" content="#00afd7">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q6K8J3BTZF"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Q6K8J3BTZF');
        </script>


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="main">

    <?php get_template_part( 'template-parts/nav/nav', 'main'); ?>
