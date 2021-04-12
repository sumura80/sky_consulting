<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8"> -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel=”SHORTCUT ICON” href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" 　alt="favicon" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="main-wrap">
    <header class="site-header">
      <div class="container">
        <div class="header-brand-info">
          <div id="branding">
            <h1 style="font-size:24px;">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img style="width:30px;" src="<?php echo get_template_directory_uri(); ?>/img/sky_consulting_logo.png" alt="logo img">
                <?php bloginfo('name'); ?>
              </a>
            </h1>
          </div>

          <div class="company-info">
            <p class="company-data">TEL:03-1234-9876 <br>住所：東京都新宿区西新宿9-8-37</p>
          </div>
        </div>
        <!--header-brand-inf-->

        <div id="js-navHamburgerBtn" class="navHamburgerBtn">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <nav class="navMenu">
          <?php $args = array(
            'theme_location' => 'primary',
            // 'menu_class' => 'flex'

          )
          ?>
          <?php wp_nav_menu($args); ?>
        </nav>

      </div><!-- ./ container -->
    </header>