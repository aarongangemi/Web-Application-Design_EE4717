<?php
$pepperoniPrice = trim($_POST['newpepperoniprice']);
$mushcheesePrice = trim($_POST['newmushcheeseprice']);
$californianPrice = trim($_POST['newcalifornianprice']);
$user = 'root';
$passwordLogin = '';
$database = "pizzadatabase";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(!$pepperoniPrice || !$mushcheesePrice || !$californianPrice)
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
    $pepperoniPrice = addslashes($pepperoniPrice);
    $mushcheesePrice = addslashes($mushcheesePrice);
    $californianPrice = addslashes($californianPrice);
}
$query = "UPDATE pizzas SET Pizza_price = '$pepperoniPrice' WHERE Pizza_Name = 'Pepperoni Pizza'";
$result = $db->query($query);
$query = "UPDATE pizzas SET Pizza_price = '$mushcheesePrice' WHERE Pizza_Name = 'Mushroom and Cheese'";
$result = $db->query($query);
$query = "UPDATE pizzas SET Pizza_price = '$californianPrice' WHERE Pizza_Name = 'Californian Pizza'";
$result = $db->query($query);
include "ntuclassics.php";
//TODO: Up to here, need to set value of input text box so value is not null - will require database to store pizza price.
//TODO: Then need to implement Update function 
?>