<!DOCTYPE html>
<html>
<head>
    <title>Winkelmandje</title>

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
                    <li class="active"><a href="winkelmandje.html.php"><i class="icon-shopping-cart icon-white"></i> Winkelmandje</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Producten <b class="caret"></b></a>
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
    <div class="row-fluid">
        <div class="span8">
            <h1>Winkelmandje</h1>
            <table id="winkelmandje" class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Productnaam</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>totaal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Apple Iphone 5</td>
                    <td>&euro;600</td>
                    <td><input type="number" min="1" step="1" value="1" style="width: 45px;"/></td>
                    <td>&euro;600</td>
                    <td><button class="btn"><i class="icon-refresh"></i></button></td>
                    <td><button class="btn"><i class="icon-remove-circle"></i></button></td>
                </tr>
                </tbody>
            </table>
            <button class="btn btn-primary btn-large"><i class="icon-shopping-cart icon-white"></i> Bestellen</button>
        </div>
    </div>
</div>
</body>
</html>