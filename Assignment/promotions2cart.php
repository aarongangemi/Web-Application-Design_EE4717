<?php
session_start();
$mixedPizzaQty = $_POST['mixedqtytextbox'];
$calzonePizzaQty = $_POST['calzoneQty'];
$sushiPizzaQty = $_POST['sushiQty'];
if(isset($mixedPizzaQty) && $mixedPizzaQty > 0)
{
    $pizzaName = "NTU's Mixed Pizza Promo";
    $subtotal = $_SESSION['cart']['mixedpizzatotal'] + $mixedPizzaQty * $_SESSION['prices']['mixedPromo'];
    $_SESSION['cart']['mixedpizzaqty'] += $mixedPizzaQty;
    $_SESSION['cart']['mixedpizzaname'] = $pizzaName;
    $_SESSION['cart']['mixedpizzatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if(isset($calzonePizzaQty) && $calzonePizzaQty > 0)
{
    $pizzaName = "Italian Calzone Promo";
    $subtotal = $_SESSION['cart']['calzonepizzatotal'] + $calzonePizzaQty * $_SESSION['prices']['calzonePromo'];
    $_SESSION['cart']['calzonepizzaqty'] += $calzonePizzaQty;
    $_SESSION['cart']['calzonepizzaname'] = $pizzaName;
    $_SESSION['cart']['calzonepizzatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if(isset($sushiPizzaQty) && $sushiPizzaQty > 0)
{
    $pizzaName = "Sushi Pizza Promo";
    $subtotal = $_SESSION['cart']['sushipizzatotal'] + $sushiPizzaQty * $_SESSION['prices']['sushiPromo'];
    $_SESSION['cart']['sushipizzaqty'] += $sushiPizzaQty;
    $_SESSION['cart']['sushipizzaname'] = $pizzaName;
    $_SESSION['cart']['sushipizzatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if($_SESSION['noOfItems'] == 0)
{
    header("Location: ntuclassics.php");
    $_SESSION['alertUser'] = true;
}
else
{
    header("Location: cartController.php");
}
?>