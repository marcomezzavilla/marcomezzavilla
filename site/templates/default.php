<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="header">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </header>
      
    <div class="text">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>