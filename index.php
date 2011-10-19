<?php
// TODO:: ajax refresh middle list section after create/delete
require 'Slim/Slim.php';
$app = new Slim();

$app->get('/', function() use($app) {
  $repo_list = get_repo_list();
  $vars = compact('repo_list');
  $app->render('index.tpl.php', $vars);
});

$app->post('/create', function() use($app) {

  $repo_name = $app->request()->post('repo_name');
  if(substr($repo_name, -4) != '.git') $repo_name .= '.git';

  $repo_list = get_repo_list();
  if(in_array($repo_name, $repo_list)) die(json_encode(array('status'=>'fail','msg'=>'The repository name already exists!')));

  `./gitinit {$repo_name}`;
  // TODO:: check if the repo is successfully created.
  die(json_encode(array('status'=>'ok','msg'=>'Repository successfully created!')));

});

$app->post('/delete', function() use($app) {

  $repo_name = $app->request()->post('repo_name');

  $repo_list = get_repo_list();
  if(!in_array($repo_name, $repo_list)) die(json_encode(array('status'=>'fail','msg'=>'No such repository!')));

  `rm -rf ../{$repo_name}`;
  die(json_encode(array('status'=>'ok','msg'=>'Repository successfully deleted!')));
});

$app->run();


// get all repo
function get_repo_list()
{
  $func = function($value) {
    return substr($value, 3);
  };
  return array_map($func, array_filter(glob('../*.git'), 'is_dir'));
}
