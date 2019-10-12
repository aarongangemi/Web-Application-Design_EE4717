<?php
session_start();
function addToCart()
{
    include 'ntuclassics.html';
    $_SESSION['cart'] = array();
    $pepperoniQty = $_POST['pepperoniQty'];
    if($pepperoniQty > 0)
    {
        $pizzaName = "Pepperoni Pizza";
        $subtotal = $pepperoniQty * 10.5;
        $pepperoniArray = array([$pepperoniQty, $pizzaName, $subtotal]);
        $_SESSION['cart']['pepperoniQty'] = $pepperoniQty;
        $_SESSION['cart']['pepperoniname'] = $pizzaName;
        $_SESSION['cart']['pepperonitotal'] = $subtotal;
    }
    $mushcheeseQty = $_POST['mushcheeseQty'];
    if($mushcheeseQty > 0)
    {
        $pizzaName = "Mushroom and Cheese Pizza";
        $subtotal = $mushcheeseQty * 12;
        $mushcheeseArray = array([$mushcheeseQty, $pizzaName, $subtotal]);
        $_SESSION['cart']['mushcheeseQty'] = $mushcheeseQty;
        $_SESSION['cart']['mushcheesename'] = $pizzaName;
        $_SESSION['cart']['mushcheesetotal'] = $subtotal;
    }
    $californianQty = $_POST['californianQty'];
    if($californianQty > 0)
    {
        $pizzaName = "Californian Pizza";
        $subtotal = $californianQty * 14.5;
        $calArray = array([$californianQty, $pizzaName, $subtotal]);
        $_SESSION['cart']['californianQty'] = $californianQty;
        $_SESSION['cart']['californianname'] = $pizzaName;
        $_SESSION['cart']['californiantotal'] = $subtotal;
    }
    $mixedQty = $_POST['mixedQty'];
    if($mixedQty > 0)
    {
        $pizzaName = "Mixed Pizza";
        $subtotal = $mixedQty * 16.5;
        $mixedArray = array([$mixedQty, $pizzaName, $subtotal]);
        $_SESSION['cart']['mixedQty'] = $mixedQty;
        $_SESSION['cart']['mixedname'] = $pizzaName;
        $_SESSION['cart']['mixedtotal'] = $subtotal;
    }
}
addToCart();
?>