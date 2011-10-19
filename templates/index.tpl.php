<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Git WebAdmin</title>
    <meta name="description" content="Simply my own git webadmin.">

    <meta name="author" content="hSATAC">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gh-buttons.css">
    <script src="js/libs/modernizr-2.0.min.js"></script>
    <script src="js/libs/respond.min.js"></script>
</head>
<body>

    <div id="header-container">
        <header class="wrapper">
            <h1 id="title">Git WebAdmin</h1>
            <nav>
                <ul>
                    <li><a href="/admin">Index</a></li>
                    <li><a target="_blank" href="https://github.com/hSATAC/Git-WebAdmin">Github</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div id="main" class="wrapper">
        <!--
        <aside>
            <h3></h3>

        </aside>
        -->
        <article>
            <header>
                <h2>Repositories</h2>
                <table class="zebra-striped" id="repo-list">
                <?foreach($repo_list as $repo): ?>
                  <tr>
                    <td><a class="repo-name" target="_blank" href="/<?=$repo?>"><?= $repo ?></a></td>
                    <td style="width:70px;"><a href="#" class="button danger icon remove" data-repo-name="<?=$repo?>">Delete</a></td>
                  </tr>
                <?endforeach;?>
                </table>
            </header>
            <h3>Create A New Repository</h3>
            <input type="text" name="repo_name" value="" placeholder="example.git">
            <a href="#" class="button big icon add" id="btn_create">Create Project</a>
            <h3>Simple Commands</h3>
            <h4>Unsigned SSL?</h4>
            <pre>git config --global http.sslVerify false</pre>
            <h4>Existing Git Repo?</h4>
            <pre>
git remote add origin https://git@git.hsatac.net/example.git
git push -u origin master</pre>
        </article>
    </div>
    <div id="footer-container">
        <!--<footer class="wrapper">
        </footer>-->
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<script src="http://twitter.github.com/bootstrap/1.3.0/bootstrap-modal.js"></script>
<script src="js/script.js"></script>
 <script>

 </script>

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

<div id="modal-from-dom" class="modal hide fade">
  <div class="modal-header">
    <a href="#" class="close">&times;</a>
    <h3>Delete Repository</h3>
  </div>
  <div class="modal-body">
    <p>Are you sure? This can't be undone.</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn primary" id="btn_delete">Delete</a>
    <a href="#" id="btn_delete_hide" class="btn secondary">Cancel</a>
  </div>
</div>
</body>
</html>
