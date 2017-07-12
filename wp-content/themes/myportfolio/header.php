<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ja" dir="ltr">
<head>
  <title>MatsuoTakehiro's portfolio Website</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="松尾健広のポートフォリオサイト">
  <meta name="keywords" content="松尾健広,MatsuoTakehiro,TakehiroMatsuo,portfolio">
  <meta name="description" content="松尾健広のウェブポートフォリオ。">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" type="text/css" media="screen, print" />
  <?php if(is_home()):?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/works.css" type="text/css" media="screen, print" />
  <?php endif;?>
  <?php if(is_single()):?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/aWork.css" type="text/css" media="screen, print" />
  <?php endif;?>
  <?php if(is_page('contact')):?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/contact.css" type="text/css" media="screen, print" />
  <?php endif;?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bootstrap.css" type="text/css" media="screen, print" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/responsive.css" type="text/css" media="screen, print" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/animate.css" type="text/css" media="screen, print" />
  <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
  <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), '2.2.0');
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js');
    wp_head();
  ?>
</head>
<body>
  <div id="wrap">
    <header id="header">
      <div class="headerLogo">
          <a href="<?php echo esc_url(home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri();?>/img/logocat.png">
            <div class="headerLogo_logo">
            <h1 class="font_sniglet">Matsuo Takehiro</h1>
            <p>'s portfolio Website</p>
          </div>
          </a>
      </div>
      <!-- .hearderLogo -->
      <div class="headerNaviToggle">
        <div class="headerNaviToggle_inner">
        <span></span><span></span><span></span>
        <h2 class="font_sniglet">MENU</h2>
      </div>
    </div><!-- headerNaviToggle -->
      <nav class="headerNaviItems">
        <ul>
          <li class="headerNaviItems_item headerNaviItems_item-state-active"><a class="font_sniglet" href="<?php echo esc_url(home_url('/') ); ?>">Top</a></li>
          <li class="headerNaviItems_item"><a class="font_sniglet" href="<?php echo get_template_directory_uri();?>/works/">Works</a></li>
          <li class="headerNaviItems_item"><a class="font_sniglet" href="<?php echo get_template_directory_uri();?>/contact/">Contact</a></li>
        </ul>
      </nav>
    </header>
    <!-- #header -->
