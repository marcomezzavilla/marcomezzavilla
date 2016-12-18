<?php snippet('header') ?>

<main class="main" role="main">
  <header class="header">
    <a href="<?= $site->url() ?>">Home</a>
    <h1><?= $page->title()->html() ?></h1>
  </header>

  <div class="text">
    <?= $page->excerpt()->kirbytext() ?>
    <?= $page->text()->kirbytext() ?>
  </div>
</main>

<script type="text/javascript">
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      controls: 0,
    });
  }
</script>

</script>

<?php snippet('footer') ?>