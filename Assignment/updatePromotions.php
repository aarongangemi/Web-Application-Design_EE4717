<?php
$largePizzaPrice = trim($_POST['2largepizzasprice']);
$familyFeedPrice = trim($_POST['familyfeedprice']);
$kidsPizzaPrice = trim($_POST['kidspizzaprice']);
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(!$largePizzaPrice || !$familyFeedPrice || !$kidsPizzaPrice)
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
    $largePizzaPrice = addslashes($largePizzaPrice);
    $familyFeedPrice = addslashes($familyFeedPrice);
    $kidsPizzaPrice = addslashes($kidsPizzaPrice);
}
$query = "UPDATE Pizzas SET Pizza_price = '$largePizzaPrice' WHERE Pizza_Name = '2 Large Pizzas'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$familyFeedPrice' WHERE Pizza_Name = 'Family Feed'";
$result = $db->query($query);
$query = "UPDATE Pizzas SET Pizza_price = '$kidsPizzaPrice' WHERE Pizza_Name = 'Kids Pizza'";
$result = $db->query($query);
include "ntuclassics.php";
?>