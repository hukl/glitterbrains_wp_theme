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
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <h1><?php bloginfo( 'name' ); ?></h1>


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="post">
                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </p>
            </div>
            <?php endwhile; ?>

            <?php
                if ( get_next_posts_link() ) {
                    next_posts_link();
                }
                ?>
                <?php
                if ( get_previous_posts_link() ) {
                    previous_posts_link();
                }
                ?>

                <?php else: ?>

                <p>No posts found. :(</p>

            <?php endif; ?>
        </div>

        <div class="col-sm-4">
            <p><img src="https://thatboatlife.com/wp-content/themes/glitterbrains/glitterbrains.jpg" width="350" height="350" alt="Glitterbrains"></p>
            <?php dynamic_sidebar( 'primary' ); ?>
            <p><a href="/mastodon">Mastodon</a></p>
            <p><a href="/impressum/">Impressum</a></p>
            <p><a href="/impressum/">Datenschutzerklärung</a></p>
            <p>
                <img src="subscribe.jpg" width="250" height="53" alt="Subscribe">
            </p>
        </div>
      </div>
    </div>
  </body>
</html>
