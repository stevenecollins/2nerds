<!doctype html>
  <head>
    <meta charset="utf-8">

    <?php // Google Chrome Frame for IE ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

  </head>

  <body <?php body_class(); ?>>
    <header class="header">
        <p>This is the header.</p>
    </header><?php // end header ?>