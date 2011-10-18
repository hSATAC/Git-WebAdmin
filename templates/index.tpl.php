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

    <link rel="stylesheet" href="css/style.css">

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
                    <li><a href="#">Github</a></li>
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
                <ul class="repo-list">
                <?foreach($repo_list as $repo): ?>
                  <li><a target="_blank" href="/<?=$repo?>"><?= $repo ?></a></li>
                <?endforeach;?>
                </ul>
            </header>
            <h3>Create A New Repository</h3>
          <form method="POST" action="create">
            <input type="text" name="repo_name" value="" placeholder="example.git">
            <input type="submit" name="submit" value="Submit">
          </form>
        </article>
    </div>
    <div id="footer-container">
        <footer class="wrapper">
        </footer>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<script src="js/script.js"></script>
 <script>

 </script>

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>
