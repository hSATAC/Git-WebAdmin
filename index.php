<?php
require 'Slim/Slim.php';
$app = new Slim();

$app->get('/', function() use($app) {
  $app->render('index.tpl.php');
});

$app->run();
