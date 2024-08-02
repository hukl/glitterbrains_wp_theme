    <?php get_header() ?>
    <div class="container">
      <div class="sm:flex sm:flex-row">
        <div class="sm:basis-2/3">
          <div>
            <h2 class="archive-title">Archiv</h2>
          </div>

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

        <?php get_sidebar() ?>
      </div>
    </div>
  </body>
</html>
