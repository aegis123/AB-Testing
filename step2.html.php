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

            <div class="span6">
                <h2>Verzend adres</h2>
                <address>
                    <strong><?= $naam ?></strong><br/>
                    <?= $straat . " " . $huisnr ?><br/>
                    <?= $postcode . " " . $stad ?><br/>
                </address>
            </div>
        </div>

        <a type="button" class="btn btn-success btn-large" href="thankyou.html.php"><i
                class="icon-ok icon-white"></i> bevestig aankoop</a>

    </div>
</div>
</body>
</html>