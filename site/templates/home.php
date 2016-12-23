<?php snippet('header') ?>

<main class="main" role="main">
  <h1><?= $page->intro()->kirbytext() ?></h1>

  <div class="main__current">
    <?= $page->current()->kirbytext() ?>
    <p><?php echo html::email("hub@marcomezzavilla.com", $text = "Get in touch", $attr = array("class" => "mail")) ?>, or <a href="http://twitter.com/marcomezzavilla" data-url="@marcomezzavilla">follow me</a>.</p>
  </div>

  <?php echo webmentions() ?>
</main>

<section class="other">
  <div class="other__time">
    <h3>News</h3>
    <br>
    <p>Two Years of Iperstudio</p>
    <p><a href="https://www.marianoviola.com/blog/two-years-of-iperstudio">Read Mariano's post</a></p>
  </div>
  
  <div class="other__random">
    <h3>Featured project</h3>
    <?php foreach(page('projects')->children()->visible()->shuffle()->limit(1) as $project): ?>  
      <p><a href="<?= $project->videourl() ?>"><?= $project->title() ?></a></p>
      <br>
      <?= $project->excerpt()->kirbytext() ?>
    <?php endforeach ?>
  </div>
</section>

<?php snippet('footer') ?>
