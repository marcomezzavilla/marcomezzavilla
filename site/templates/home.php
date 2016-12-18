<?php snippet('header') ?>

  <main class="main" role="main">
    <h1><?= $page->intro()->kirbytext() ?></h1>

    <div class="main__current">
      <?= $page->current()->kirbytext() ?>
      <p><?php echo html::email("hub@marcomezzavilla.com", $text = "Get in touch", $attr = array("class" => "mail")) ?>, or <a href="http://twitter.com/marcomezzavilla" data-url="@marcomezzavilla">follow me</a>.</p>
    </div>
  </main>

  <section class="other">
    <div class="other__time">
      <h3>News</h3>
      <br>
      <p>I'm working on my new website.</p>
      <p>Right now everything is broken here (:</p>
    </div>
    
    <div class="other__random">
      <h3>Featured project</h3>
      <p>Societies on the Move</p>
      <br>
      <p>My work/illustration has been chosen to take part in the exhibition 'Societies on the Move', launched by Fondazione Bevilacqua La Masa and Favini.</p>
    </div>
  </section>

<?php snippet('footer') ?>
