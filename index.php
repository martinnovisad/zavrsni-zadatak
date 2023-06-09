<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">



</head>

<body class="body-container">

<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">New features</a>
                <a class="nav-link" href="#">Press</a>
                <a class="nav-link" href="#">New hires</a>
                <a class="nav-link" href="#">About</a>
            </nav>
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Sportal Blog</h1>
            <p class="lead blog-description"> Pratite sportske vesti na našem blogu.</p>
        </div>
    </div>
</header>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php include ("posts.php");?>

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li><br>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li><br>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

    <?php include "footer.php"; ?> 
    
</body>
</html>
