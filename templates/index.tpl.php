<html>
<head>
</head>
<body>
<h1>Git WebAdmin</h1>

<h2>Repositories List:</h2>
<ul>
<?foreach($repo_list as $repo): ?>
  <li><a target="_blank" href="/<?=substr($repo,3)?>"><?= substr($repo,3) ?></a></li>
<?endforeach;?>
</ul>
<h2>Create New Repo:</h2>
</body>
</html>
