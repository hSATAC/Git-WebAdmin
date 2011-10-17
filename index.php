<?php
require 'Slim/Slim.php';
$app = new Slim();

$app->get('/', function() use($app) {
  // 取得所有 repo
  $repo_list = array_filter(glob('../*.git'), 'is_dir');
  $vars = compact('repo_list');
  $app->render('index.tpl.php', $vars);
});

$app->run();
