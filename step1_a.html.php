<!DOCTYPE html>
<html>
<head>
    <title>Index A/B testing</title>
    <?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?>
<div class="container">
    <div>
        <fieldset>
            <legend>Adres gegevens</legend>
            <form class="form-horizontal" action="step2.html.php" method="POST">
                <div class="control-group">
                    <label class="control-label" for="naam">Naam:</label>
                    <div class="controls">
                        <input type="text" id="naam" placeholder="naam" name="naam" style="width: 21em;" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="straat">Straat en huisnummer:</label>
                    <div class="controls">
                        <input type="text" id="straat" placeholder="straat" name="straat" style="width: 17em;" />
                        <input type="text" id="huisnr" placeholder="huisnr" name="huisnr" style="width: 3em;" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="postcode">Stad en Postcode:</label>
                    <div class="controls">
                        <input type="text" id="postcode" placeholder="postcode" name="postcode" style="width: 5em;" />
                        <input type="text" id="stad" placeholder="stad" name="stad" style="width: 15em;" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" class="btn btn-primary" value="Bestellen" />
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>