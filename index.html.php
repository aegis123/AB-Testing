<!DOCTYPE html>
<html lang="nl">
<head>
    <title>A/B testing webshop</title>

    <?php include 'header.php' ?>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.html.php">A/B testing webshop</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="index.html.php"><i class="icon-home icon-white"></i> Home</a></li>
                    <li><a href="winkelmandje.html.php"><i class="icon-shopping-cart icon-white"></i> Winkelmandje</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Producten <i class="caret"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="product_htc_one.html.php">HTC One</a></li>
                            <li><a href="product_iphone.html.php">Iphone 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>The new HTC One</h1>
        <p>With a sleek aluminum body, a live home screen that streams all of your favorite content, a photo gallery that comes to life, and dual frontal stereo speakers, the new HTC One is ready to reshape your smartphone experience.</p>

        <p><a href="product_htc_one.html.php" class="btn btn-primary btn-large">HTC ONE &raquo;</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Apple Iphone 5</h2>

            <p>What makes an iPhone unlike anything else? Maybe it’s that it lets you do so many things. Or that it lets you do so many things so easily. Those are two reasons iPhone owners say they love their iPhone. But there are many others as well.</p>

            <p><a class="btn" href="product_iphone.html.php">Iphone 5 &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>HTC one</h2>

            <p>With a sleek aluminum body, a live home screen that streams all of your favorite content, a photo gallery that comes to life, and dual frontal stereo speakers, the new HTC One is ready to reshape your smartphone experience.</p>

            <p><a class="btn" href="product_htc_one.html.php">HTC One &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Apple Iphone 5</h2>

            <p>What makes an iPhone unlike anything else? Maybe it’s that it lets you do so many things. Or that it lets you do so many things so easily. Those are two reasons iPhone owners say they love their iPhone. But there are many others as well.</p>

            <p><a class="btn" href="product_iphone.html.php">Iphone 5 &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2013</p>
    </footer>

</div>
<!-- /container -->
</body>
</html>