<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ijsbrand
 * Date: 30-5-13
 * Time: 11:50
 * To change this template use File | Settings | File Templates.
 */

if($_POST){
    $naam = $naam ? $naam : $_POST['naam'];
    $straat = $straat ? $straat : $_POST['straat'];
    $huisnr = $_POST['huisnr'];
    $postcode = $_POST['postcode'];
    $stad = $_POST['stad'];

    $adresGegevens = '';
    $adresGegevens = $naam . $straat . $huisnr . $postcode . $stad;

    print_r($adresGegevens);

    setcookie("adres", json_encode($adresGegevens));

    print_r($_COOKIE["adres"]);
}

?>