<?php
session_start();
$margheritaQty = $_POST['margheritaQty'];
$hawaiianQty = $_POST['hawaiianQty'];
$pestoQty = $_POST['pestoQty'];
if($margheritaQty > 0 && isset($margheritaQty))
{
    $pizzaName = "Margherita Pizza";
    $subtotal = $_SESSION['cart']['margheritatotal'] + $margheritaQty * $_SESSION['prices'][4];;
    $_SESSION['cart']['margheritaqty'] += $margheritaQty;
    $_SESSION['cart']['margheritaname'] = $pizzaName;
    $_SESSION['cart']['margheritatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if($hawaiianQty > 0 && isset($hawaiianQty))
{
    $pizzaName = "Hawaiian Pizza";
    $subtotal = $_SESSION['cart']['hawaiiantotal'] + $hawaiianQty * $_SESSION['prices'][5];;
    $_SESSION['cart']['hawaiianQty'] += $hawaiianQty;
    $_SESSION['cart']['hawaiianname'] = $pizzaName;
    $_SESSION['cart']['hawaiiantotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if($pestoQty > 0 && isset($pestoQty))
{
    $pizzaName = "Pesto Peri Chicken Pizza";
    $subtotal = $_SESSION['cart']['pestototal'] + $pestoQty * $_SESSION['prices'][6];;
    $_SESSION['cart']['pestoqty'] += $pestoQty;
    $_SESSION['cart']['pestoname'] = $pizzaName;
    $_SESSION['cart']['pestototal'] = $subtotal;
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