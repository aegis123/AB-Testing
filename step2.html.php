<?php ob_start();
    include 'step2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'header.php' ?>
</head>
<body>
    <?php include 'menu.php' ?>

    <div class="container">
        <div class="span6">
        <table class="table" >
            <thead>
                <tr><th>Bevestiging</th></tr>
            </thead>
            <tbody>
                <tr><th>Straat</th>
                    <td>xxx</td>
                </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> bevestig aankoop</button>
        </div>
    </div>
</body>
</html>