<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!-- html5 shive for ie8-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" ></a></div>
            <nav class="main-nav">
                <button class="navbar-toggle" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php wp_nav_menu(array('theme_location' => 'main', 'container' => '')); ?>
            </nav>
        </div>
    </header>