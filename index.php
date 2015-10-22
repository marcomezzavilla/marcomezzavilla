<?php require('toolkit/bootstrap.php') ?>

<!-- hi, lurker! -->

<!doctype html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Marco Mezzavilla</title>

  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body id="index">

  <!--
  <a href="works/index.html"> <img src="assets/images/back.svg" class="back"> </a>


  <a href="now/index.html"> <img src="assets/images/next.svg" class="next"> </a>
    -->

  <div id="less" class="info">
    <div class="logo"></div>

    <div class="lookatme">
      <h1 class="big">
        <p>Hi, I'm <a href="#more" data-url="See below">Marco</a>. <span class="grey">26y/o, Italy.</span></p>
        <p>I create websites.</p>
        <p>You can see my latest projects <a href="http://iperstudio.net" data-url="http://iperstudio.net">here</a>.</p></h1>
    </div>

    <div class="current small">
      <p>I'm currently working on <a href="http://careof.org" data-url="http://careof.org">Careof</a> with <a href="http://marianoviola.com" data-url="http://marianoviola.com">Mariano Viola</a> and <a href="http://www.98800.org/"data-url="http://98800.org">AUT</a>.</p>
      <p><?php echo html::email("hub@marcomezzavilla.com", $text = "Get in touch", $attr = array("class" => "mail", "data-url" => "hub[at]marcomezzavilla[dot]com")) ?>, or <a href="http://twitter.com/marcomezzavilla" data-url="@marcomezzavilla">follow me</a>.</p>
    </div>
  </div>

  <div id="more" class="other">
    <div class="text">
      <div class="do small">
        <h3 class="small">What I do (not do)</h3>
        <p>I create handcrafted websites, choosing time by time the most suitable tool for the purpose.</p>
        <!-- <p>I want to help people make sense of data.</p> -->
        <p>I prefer functionality and meaning over fanciness and trends.</p>
        <p>I don't regardlessly accept all work requests.</p>
      </div>

      <div class="inspirations small">
        <h3 class="small">Inspirations</h3>
        <ul>
          <li><a href="http://www.librimondadori.it/libri/l-uomo-senza-qualita-robert-musil" data-url="http://librimondadori.it">L'uomo senza qualità</a> <span class="grey">Currently reading</span></li>
          <li><a href="http://www.adelphi.it/libro/9788845929250" data-url="http://adelphi.it">Sette brevi lezioni di fisica</a></li>
          <li><a href="http://smallblog.desandro.com/2014/legend-of-zelda/" data-url="http://smallblog.desandro.com">The Legend of Zelda</a></li>
          <li><a href="http://malikafavre.com" data-url="http://malikafavre.com">Malika Favre</a></li>
          <li><a href="http://bost.ocks.org/mike/algorithms/" data-url="http://bost.ocks.org">Visualizing Algorithms</a></li>
          <li><a href="http://en.wikipedia.org/wiki/Linguistic_relativity" data-url="http://en.wikipedia.org">Linguistic relativity</a></li>
          <li><a href="http://riccardoceccato.tumblr.com/" data-url="http://riccardoceccato.tumblr.com">Riccardo Ceccato</a></li>
          <li><a href="http://antirez.com/news/74" data-url="http://antirez.com">Fascinating little programs</a></li>
          <li><a href="http://thegreatdiscontent.com/interview/paul-octavious" data-url="http://thegreatdiscontent.com">Paul Octavious</a></li>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>