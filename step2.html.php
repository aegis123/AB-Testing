<?php ob_start();
include 'step2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bevestiging</title>
    <?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <h1>Bevestiging</h1>

            <h2>Verzend adres</h2>
            <address>
                <strong><?= $naam ?></strong><br />
                <?= $straat . " " . $huisnr ?><br />
                <?= $postcode . " " . $stad ?><br />
            </address>
            <h2>Artikelen</h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Productnaam</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>Total prijs</th>
                </tr>
                </thead>
                <tbody>
                <?
                $count = 0;
                if($items != null && isset($items)) {
                foreach ($items as $product) {
                    $count += (int)$product->quantity * (int)$product->price;
                    ?>
                    <tr>
                        <td><?= $product->productName ?></td>
                        <td>&euro;<?= (int)$product->price ?></td>
                        <td><?= $product->quantity ?></td>
                        <td>&euro;<?= (int)$product->quantity * (int)$product->price ?></td>
                    </tr>
                <?
                }
                }
                ?>
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Totaal</strong></td>
                    <td>&euro;<?= $count ?></td>
                </tr>
                </tbody>
            </table>
            <a type="button" id="back_button" class="btn btn-danger btn-large" >
                <i class="icon-backward icon-white"></i> Terug</a>
            <a type="button" class="btn btn-success btn-large" href="thankyou.html.php">
                <i class="icon-ok icon-white"></i> bevestig aankoop</a>
        </div>

    </div>
</div>
</body>
</html>