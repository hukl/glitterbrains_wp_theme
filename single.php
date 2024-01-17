  <?php get_header() ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="post single-post">
                <h2 class="single-post-headline"><?php the_title(); ?></h2>
                <p>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </p>
            </div>

            <?php
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }
            ?>
    </div>
    <?php get_sidebar() ?>
  </div>
</body>
