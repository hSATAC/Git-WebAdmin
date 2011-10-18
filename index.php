<?php
require 'Slim/Slim.php';
$app = new Slim();

$app->get('/', function() use($app) {
  $repo_list = get_repo_list();
  $vars = compact('repo_list');
  $app->render('index.tpl.php', $vars);
});
$app->post('/create', function() use($app) {

  echo $app->request()->post('repo_name');
});
$app->run();


// 取得所有 repo
function get_repo_list()
{
  $func = function($value) {
    return substr($value, 3);
  };
  return array_map($func, array_filter(glob('../*.git'), 'is_dir'));
}
