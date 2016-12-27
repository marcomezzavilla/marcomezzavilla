<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Marco Mezzavilla</title>
  <meta name="description" content="I create websites.">

  <link rel="webmention" href="<?php echo url('webmention') ?>">

  <?= css(array(
    'assets/css/style.css',
    '@auto',
    'assets/css/vendor/prism.css'
  )) ?>

  <?php if(date('H:i a') <= '07:00 am' || date('H:i') >= '18:00 pm'): ?>
    <!-- it's night -->
    <?= css('assets/css/night.css') ?>
  <?php elseif(date('d/m') == '25/12'): ?>
    <!-- it's christmas -->
    <?= css('assets/css/christmas.css') ?>
  <?php endif ?>

  <?php echo js(array(
    'assets/js/vendor/prism.js'
  )) ?>


</head>
<body id="<?= $page->template() ?>">
