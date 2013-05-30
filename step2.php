<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ijsbrand
 * Date: 30-5-13
 * Time: 11:50
 * To change this template use File | Settings | File Templates.
 */

if($_POST){
    isset($_POST['naam']) ? $naam = $_POST['naam'] : $naam = '';
    isset($_POST['straat']) ? $straat = $_POST['straat'] : $straat = '';
    isset($_POST['huisnr']) ? $huisnr = $_POST['huisnr'] : $huisnr = '';
    isset($_POST['postcode']) ? $postcode = $_POST['postcode'] : $postcode  = '';
    isset($_POST['stad']) ? $stad = $_POST['stad'] : $stad = '';

    $adresGegeves = array(
        'naam'=>$naam,
        'straat'=>$straat,
        'huisnr'=>$huisnr,
        'postcode'=>$postcode,
        'stad'=>$stad
    );

    $items = array();
    if(isset($_COOKIE["iphone"])) {
        $iphone = json_decode($_COOKIE["iphone"]);
        array_push($items, $iphone);
    }
    if(isset($_COOKIE["htc_one"])) {
        $htc_one = json_decode($_COOKIE["htc_one"]);
        array_push($items, $htc_one);
    }

    setcookie('adres', json_encode($adresGegeves));
}
