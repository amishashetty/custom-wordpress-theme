<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="logo">
      <img
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png"
        alt="<?php bloginfo('name'); ?> Logo"
        loading="lazy"
      />
    </div>
    <nav class="main-nav">
      <?php wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false
      )); ?>
    </nav>
  </div>
</header>