<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head()?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body <?php body_class(); ?>>
  <header>
    <nav>
      <div class="header-bar">
        <a href="<?php echo site_url()?>">
          <img class="sj-logo" src="<?php echo get_theme_file_uri('/images/logo-small.png')?>" alt="logo">
        </a>

        <!-- Hamburger Menu -->
        <div class="menu-wrap">
          <input id="hamburgerMenu" type="checkbox" class="toggler"></input>
          <div class="hamburger">
            <div></div>
          </div>
          <div class="menu">
            <div>
              <div class="sj-side-menu">

                <?php
                wp_nav_menu(array(
                  'theme_location' => 'sideMenuLocation'
                ));

                ?>
              </div>
            </div>
          </div>
        </div>



      </div>
    </nav>

    <section
     style="background-image: url(<?php echo get_theme_file_uri('/images/banner-medium.png')?>);" class="banner"></div>
  </header>
