<?php get_header() ?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

            <div class="post">
                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </p>
            </div>
    </div>
    <div class="col-sm-4">
        <p><img src="https://thatboatlife.com/wp-content/themes/glitterbrains/glitterbrains.jpg" width="350" height="350" alt="Glitterbrains"></p>
        <?php dynamic_sidebar( 'primary' ); ?>
        <p><a href="https://podcasts.social/@glitterbrains">Mastodon</a></p>
        <p><a href="/impressum/">Impressum</a></p>
        <p><a href="/datenschutzerklarung/">Datenschutzerklärung</a></p>
    </div>
  </div>
</body>
