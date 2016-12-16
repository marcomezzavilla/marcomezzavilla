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

  <div id="less" class="info">
    <div class="logo"></div>

    <div class="lookatme">
      <h1 class="big">
        <p>Hi, I'm <a href="#more" data-url="See below">Marco</a>. <span class="grey">27y/o, Italy.</span></p>
        <p>I create websites.</p>
        <p>You can see my latest projects <a href="http://iperstudio.net" data-url="iperstudio.net">here</a>.</p></h1>
    </div>

    <div class="current small">
      <p>I'm currently working on <a href="https://archives.rinascente.it/it/" data-url="archives.rinascente.it">la Rinascente Archives</a> with <a href="http://marianoviola.com" data-url="marianoviola.com">Mariano Viola</a> and <a href="http://www.98800.org/" data-url="98800.org">AUT</a>.</p>
      <p><?php echo html::email("hub@marcomezzavilla.com", $text = "Get in touch", $attr = array("class" => "mail")) ?>, or <a href="http://twitter.com/marcomezzavilla" data-url="@marcomezzavilla">follow me</a>.</p>
    </div>
  </div>

  <div id="more" class="other">
    <div class="text">
      <div class="do small">
        <h3 class="small">What I do</h3>
        <p>I create handcrafted websites, choosing time by time the most suitable tool for the purpose.</p>
        <!-- <p>I want to help people make sense of data.</p> -->
        <p>I prefer functionality and meaning over fanciness and trends.</p>
        <p>I don't regardlessly accept all work requests.</p>
      </div>

      <div class="inspirations small">
        <h3 class="small">Inspirations</h3>
        <ul>
          <li><a href="http://www.bollatiboringhieri.it/scheda.php?codice=17610" data-url="bollatiboringhieri.it">L'uomo è antiquato</a> <span class="grey">Currently reading</span></li>
          <li><a href="http://www.librimondadori.it/libri/opere-scelte-bohumil-hrabal" data-url="librimondadori.it">Hrabal, opere scelte</a> <span class="grey">Currently reading</span></li>
          <li><a href="http://www.librimondadori.it/libri/l-uomo-senza-qualita-robert-musil" data-url="librimondadori.it">L'uomo senza qualità</a> <span class="grey">Currently reading</span></li>
          <li><a href="http://www.adelphi.it/libro/9788845929250" data-url="adelphi.it">Sette brevi lezioni di fisica</a></li>
          <li><a href="http://smallblog.desandro.com/2014/legend-of-zelda/" data-url="smallblog.desandro.com">The Legend of Zelda</a></li>
          <li><a href="http://malikafavre.com" data-url="malikafavre.com">Malika Favre</a></li>
          <li><a href="http://bost.ocks.org/mike/algorithms/" data-url="bost.ocks.org">Visualizing Algorithms</a></li>
          <li><a href="http://en.wikipedia.org/wiki/Linguistic_relativity" data-url="en.wikipedia.org">Linguistic relativity</a></li>
          <!-- <li><a href="http://riccardoceccato.tumblr.com/" data-url="riccardoceccato.tumblr.com">Riccardo Ceccato</a></li> -->
          <li><a href="http://antirez.com/news/74" data-url="antirez.com">Fascinating little programs</a></li>
          <li><a href="http://thegreatdiscontent.com/interview/paul-octavious" data-url="thegreatdiscontent.com">Paul Octavious</a></li>
        </ul>
      </div>
    </div>
  </div>

</body>

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.marcomezzavilla.com","*.marcomezzavilla.it"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.iperstudio.net/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.iperstudio.net/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79384029-1', 'auto');
  ga('send', 'pageview');
</script>

</html>