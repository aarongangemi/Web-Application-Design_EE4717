<?php
session_start();
include 'studentspecials.html';
$margheritaQty = $_POST['margheritaQty'];
$hawaiianQty = $_POST['hawaiianQty'];
$pestoQty = $_POST['pestoQty'];
$vegetarianQty = $_POST['vegetarianQty'];
if($margheritaQty > 0 && isset($margheritaQty))
{
    $pizzaName = "Margherita Pizza";
    $subtotal = $margheritaQty * 11;
    $_SESSION['cart']['margheritaqty'] = $margheritaQty;
    $_SESSION['cart']['margheritaname'] = $pizzaName;
    $_SESSION['cart']['margheritatotal'] = $subtotal;
}
if($hawaiianQty > 0 && isset($hawaiianQty))
{
    $pizzaName = "Hawaiian Pizza";
    $subtotal = $hawaiianQty * 13.50;
    $_SESSION['cart']['hawaiianQty'] = $hawaiianQty;
    $_SESSION['cart']['hawaiianname'] = $pizzaName;
    $_SESSION['cart']['hawaiiantotal'] = $subtotal;
}
if($pestoQty > 0 && isset($pestoQty))
{
    $pizzaName = "Pesto Peri Chicken Pizza";
    $subtotal = $pestoQty * 12.5;
    $_SESSION['cart']['pestoqty'] = $pestoQty;
    $_SESSION['cart']['pestoname'] = $pizzaName;
    $_SESSION['cart']['pestototal'] = $subtotal;
}
if($vegetarianQty > 0 && isset($vegetarianQty))
{
    $pizzaName = "Vegetarian Pizza";
    $subtotal = $vegetarianQty * 14;
    $_SESSION['cart']['vegetarianqty'] = $vegetarianQty;
    $_SESSION['cart']['vegetarianname'] = $pizzaName;
    $_SESSION['cart']['vegetariantotal'] = $subtotal;
}
?>