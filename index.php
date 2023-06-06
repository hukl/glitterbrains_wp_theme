  <?php get_header() ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="post">
                <?php
                    the_title(
                      sprintf('<h2><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ),
                      '</a></h2>'
                    );
                ?>
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
            <p><a href="https://podcasts.social/@glitterbrains">Mastodon</a></p>
            <p><a href="/impressum/">Impressum</a></p>
            <p><a href="/datenschutzerklarung/">Datenschutzerklärung</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
