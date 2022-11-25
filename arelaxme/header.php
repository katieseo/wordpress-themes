<?php
/**
 * main
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body <?php body_class(); ?>>
  <div id="frame">

    <!-- home background image -->
    <?php if (is_front_page() && has_post_thumbnail()) : ?>
    <div class="home-image"
      <?php $domsxe = simplexml_load_string(get_the_post_thumbnail());
            $thumbnailsrc = $domsxe->attributes()->src; ?>
            style="background-image:url(<?php echo $thumbnailsrc ?>)"  
    >
    </div>
    <?php endif; ?>

    <!-- header -->
    <header id="header">
      <div class="container">
        <div class="logo">
          <span class="logo--flower-petal"><img src="<?php print IMAGES; ?>/logo-flower-petal.png"></span>
          <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/logo.png"></a>
        </div>
        <nav class="header-nav">
          <button class="header-nav--toggle"><span></span></button>
          <?php wp_nav_menu(array('menu' => 'main','container' => '')); ?>
        </nav>
      </div>
    </header>