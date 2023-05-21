<!doctype html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="https://thatboatlife.com/wp-content/themes/glitterbrains/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://thatboatlife.com/wp-content/themes/glitterbrains/fonts/inter.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container theme-header">
      <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
