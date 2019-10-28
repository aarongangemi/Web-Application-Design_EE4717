<?php
$mixedPizzaPrice = trim($_POST['mixedpizzaprice']);
$calzonePrice = trim($_POST['calzoneprice']);
$sushiPrice = trim($_POST['sushiprice']);
$user = 'root';
$passwordLogin = '';
$database = "pizzadatabase";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(!$mixedPizzaPrice || !$calzonePrice || !$sushiPrice)
{
    echo "A price is still to be entered, please try again";
    header("Location: admin.php");
    exit;
}
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
if(!get_magic_quotes_gpc())
{
    $mixedPizzaPrice = addslashes($mixedPizzaPrice);
    $calzonePrice = addslashes($calzonePrice);
    $sushiPrice = addslashes($sushiPrice);
}
$query = "UPDATE pizzas SET Pizza_price = '$mixedPizzaPrice' WHERE Pizza_Name = 'NTU Mixed Pizza Promo'";
$result = $db->query($query);
$query = "UPDATE pizzas SET Pizza_price = '$calzonePrice' WHERE Pizza_Name = 'Italian Calzone Promo'";
$result = $db->query($query);
$query = "UPDATE pizzas SET Pizza_price = '$sushiPrice' WHERE Pizza_Name = 'NTU Sushi Pizza Promo'";
$result = $db->query($query);
include "ntuclassics.php";
//TODO: Up to here, need to set value of input text box so value is not null - will require database to store pizza price.
//TODO: Then need to implement Update function 
?>