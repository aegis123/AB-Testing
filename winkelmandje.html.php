<!DOCTYPE html>
<html>
<head>
    <title>Winkelmandje</title>

    <?php include 'header.php' ?>

</head>
<body>
    <?php include 'menu.php' ?>


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
                    <th>Bijwerken/Verwijder</th>
                </tr>
                </thead>
                <tbody id="table_data">
                </tbody>
            </table>
            <button class="btn btn-primary btn-large"><i class="icon-shopping-cart icon-white"></i> Bestellen</button>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        createShoppingCart();
    });
</script>
</body>
</html>