<!DOCTYPE html>
<html>
<head>
    <title>Index A/B testing</title>
    <?php include 'header.php' ?>
</head>
<body>
<?php include 'menu.php' ?>
<div class="container">
    <div class="span8">
        <form>
            <fieldset>
                <legend>Adres gegevens</legend>
                <label>Naam:</label>
                <input type="text" id="naam" placeholder="naam" required />
                <label>Straat:</label>
                <input type="text" id="straat" placeholder="straat" required />
                <label>Huisnummer:</label>
                <input type="text" id="huisnr" placeholder="huisnr" required />
                <label>Postcode:</label>
                <input type="text" id="postcode" placeholder="postcode" required />
                <label>Stad:</label>
                <input type="text" id="stad" placeholder="stad" required /> <br />
                <button type="submit" class="btn btn-danger">
                    <i class="icon-shopping-cart icon-white"></i> Bestellen
                </button>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>