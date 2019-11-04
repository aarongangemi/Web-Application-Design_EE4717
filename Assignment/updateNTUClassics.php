<?php
$pepperoniPrice = trim($_POST['newpepperoniprice']);
$mushcheesePrice = trim($_POST['newmushcheeseprice']);
$californianPrice = trim($_POST['newcalifornianprice']);
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
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
$query = "UPDATE Pizzas SET Pizza_price = '$pepperoniPrice' WHERE Pizza_Name = 'Pepperoni Pizza'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$mushcheesePrice' WHERE Pizza_Name = 'Mushroom and Cheese'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$californianPrice' WHERE Pizza_Name = 'Californian Pizza'";
$result = $db->query($query);
include "ntuclassics.php";
?>