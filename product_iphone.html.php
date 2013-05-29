<!DOCTYPE html>
<html>
<head>
    <title>Iphone 5</title>
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
                    <li><a href="index.html.php"><i class="icon-home icon-white"></i> Home</a></li>
                    <li><a href="winkelmandje.html.php"><i class="icon-shopping-cart icon-white"></i> Winkelmandje</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Producten <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="product_htc_one.html.php">HTC One</a></li>
                            <li class="active"><a href="product_iphone.html.php">Iphone 5</a></li>
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
    <div class="row-fluid">
        <div class="span12"><h1>Iphone5</h1></div>
    </div>
    <div class="row-fluid">
        <div class="span5">
            <img src="img/iphone_5.jpg" />
        </div>
        <div class="span7" id="beschrijving">
            <h2>beschrijving</h2>
            <p>De iPhone 5 heeft een 4-inch scherm en een snellere Apple A6-processor.
                De iPhone heeft LTE-antennes, waardoor hij gebruik kan maken van snellere mobiele 4G LTE-netwerken.
                Onderop de iPhone 5 zit een kleinere Lightning dockconnector.
            </p>
            <br/><br/><br />
            <p><a class="btn btn-large btn-success" href="winkelmandje.html.php" onclick="addProductToCart('iphone', 600, 1)">KOPEN !!!</a></p>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span5"></div>
        <div class="span7">
            <h2>Introducing the Iphone 5</h2>
            <!--<iframe width="560" height="315" src="http://www.youtube.com/embed/xNsGNlDb6xY" frameborder="0" allowfullscreen></iframe>-->
            <iframe width="300" height="200" src="http://www.youtube.com/embed/xNsGNlDb6xY" frameborder="0" allowfullscreen></iframe>
        </div>
</div>
</body>
</html>