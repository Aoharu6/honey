<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo( 'template_directory' ) ?>/image/favicon.ico">

    <title>
      <?php wp_title('|', true,'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="menu-outer">
        <nav class="navbar">
          <div class="menu-inner">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="social-icons">
              <a href="http://www.weixin.com" target="_blank">
                <i class="fa fa-weixin" aria-hidden="true"></i>
              </a>
              <a href="http://www.weibo.com" target="_blank">
                <i class="fa fa-weibo" aria-hidden="true"></i>
              </a>
              <a href="http://www.qq.com" target="_blank">
                <i class="fa fa-qq" aria-hidden="true"></i>
              </a>
            </div>

            <div class="navbar-header">
              <h1 class="site-title">
                <a class="navbar-header" rel="home" href="<?php bloginfo('url') ?>"></a>
              </h1>
            </div>

            <div id="search-link">
              <span class="search-link">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="" value="" name="s" title="Search">
                <input type="submit" class="search-submit button" name="submit" value="" deluminate_imagetype="png">
                <!-- <button class="btn btn-default" type="button">Go!</button> -->
                </form>
              </span>
            </div><!-- /.col-lg-6 -->

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div id="site-navigation" class="main-navigation" role="navigation">
              <div class="menu-main-menu-container">
                <ul class="menu-list">
                  <?php

                    $arg = array(
                      'menu'       => 'header-menu',
                      'menu_class' => 'menu-list',
                      'container'  => 'false'
                    );
                    wp_nav_menu($arg);

                   ?>
                </ul>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
    </div>
