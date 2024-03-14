<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
    <title><?php echo get_the_title(); ?><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <php? wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header-area">
      <?php if ( wp_is_mobile()) : ?><!--モバイル端末のみ表示させる-->
        <div class="hamburger-menu-wrapper">
          <input type="checkbox" id="hamburger-menu-button">
          <label for="hamburger-menu-button" class="hamburger-menu-open">
            <i class="fas fa-bars"></i>
          </label>
          <label for="hamburger-menu-button" class="hamburger-menu-close"></label>
          <div class="hamburger-menu-content">
            <nav class="hamburger-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'hamburger-menu', 'fallback_cb' => 'false' )); ?>
            </nav>
          </div>
        </div>
      <?php endif; ?>
    
      <div class="header-logo-nav">    
        <div class="header-logo-syamei">
          <img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/logo-syamei.png" alt="現研ロゴ">
        </div>
        <ul class="header-nav">
          <li><a href="<?php echo esc_url( home_url('company')); ?>">会社情報</a></li>
          <li><a href="<?php echo esc_url( home_url('service')); ?>">事業の構成</a></li>
          <li><a href="<?php echo esc_url( home_url('study')); ?>">研究会活動</a></li>
          <li><a href="<?php echo esc_url( home_url('training')); ?>">経営考え方教室</a></li>
          <li><a href="<?php echo esc_url( home_url('think-tank-function')); ?>">社会提言</a></li>
          <li><a href="<?php echo esc_url( home_url('media-business')); ?>">メディア事業</a></li>
          <li><a href="<?php echo esc_url( home_url('column')); ?>"><span>コラム＆アーティクル</span></a></li>
        </ul>
        <div class="header-search-custom" onclick="openSearchForm()"><i class="fa-solid fa-magnifying-glass"></i></div>
      </div>
    </header>

    <div class="wrap-search-form">
      <div id="search-form" class="search-form-header">
        <?php get_template_part('searchform'); ?>
      </div>
    </div>