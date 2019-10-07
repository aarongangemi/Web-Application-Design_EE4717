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
        array_push($_SESSION['cart'], $pepperoniArray);
    }
    $mushcheeseQty = $_POST['mushcheeseQty'];
    if($mushcheeseQty > 0)
    {
        $pizzaName = "Mushroom and Cheese Pizza";
        $subtotal = $mushcheeseQty * 12;
        $mushcheeseArray = array([$mushcheeseQty, $pizzaName, $subtotal]);
        array_push($_SESSION['cart'], $mushcheeseArray);
    }
    $californianQty = $_POST['californianQty'];
    if($californianQty > 0)
    {
        $pizzaName = "Californian Pizza";
        $subtotal = $californianQty * 14.5;
        $calArray = array([$californianQty, $pizzaName, $subtotal]);
        array_push($_SESSION['cart'], $calArray);
    }
    $mixedQty = $_POST['mixedQty'];
    if($mixedQty > 0)
    {
        $pizzaName = "Mixed Pizza";
        $subtotal = $mixedQty * 16.5;
        $mixedArray = array([$mixedQty, $pizzaName, $subtotal]);
        array_push($_SESSION['cart'],$mixedArray);
    }
    print_r($_SESSION['cart']);
}
addToCart();
?>