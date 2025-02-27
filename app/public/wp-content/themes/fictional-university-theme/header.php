<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset') ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left">
        <a href="<?php echo site_url('') ?>"><strong>Fictional</strong> University</a>
      </h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger " aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>

          </ul>
        </nav>
        <div class="site-header__util">

        </div>
      </div>
    </div>
  </header>