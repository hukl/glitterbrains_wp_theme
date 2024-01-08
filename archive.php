  <?php get_header() ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-6">
        <?php foreach (\Podlove\get_podcast()->episodes() as $episode): ?>
          <div class="gbr-archive-podcast-episode">
            <a href="<?php echo $episode->url() ?>"><h4><?php echo $episode->title() ?></h4></a>
            <div class="gbr-archive-podcast-episode">
              <span><?php echo $episode->publicationDate()->format('d.m.Y') ?> - <?php echo $episode->duration() ?></span>
            </div>
            <p><?php echo $episode->summary() ?></p>
          </div>
        <?php endforeach ?>
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
