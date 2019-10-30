<?php
$margheritaPrice = trim($_POST['newmargheritaprice']);
$hawaiianPrice = trim($_POST['newhawaiianprice']);
$pestoperiPrice = trim($_POST['newpestoperiprice']);
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(!$margheritaPrice || !$hawaiianPrice || !$pestoperiPrice)
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
    $margheritaPrice = addslashes($margheritaPrice);
    $hawaiianPrice = addslashes($hawaiianPrice);
    $pestoperiPrice = addslashes($pestoperiPrice);
}
$query = "UPDATE Pizzas SET Pizza_price = '$margheritaPrice' WHERE Pizza_Name = 'Margherita Pizza'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$hawaiianPrice' WHERE Pizza_Name = 'Hawaiian Pizza'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$pestoperiPrice' WHERE Pizza_Name = 'Pesto Peri Pizza'";
$result = $db->query($query);
include "ntuclassics.php";
//TODO: Up to here, need to set value of input text box so value is not null - will require database to store pizza price.
//TODO: Then need to implement Update function 
?>