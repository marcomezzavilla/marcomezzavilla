<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Marco Mezzavilla</title>
  <meta name="description" content="I create websites.">

  <?= css('assets/css/style.css') ?>

  <?php if(date('H:i') < '07:00' && date('H:i') > '19:00'): ?>
    <!-- it's night -->
    <?= css('assets/css/night.css') ?>
  <?php elseif(date('d/m') == '25/12'): ?>
    <!-- it's christmas -->
    <?= css('assets/css/christmas.css') ?>
  <?php endif ?>

</head>
<body>
