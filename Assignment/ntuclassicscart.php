<?php
session_start();
    include 'ntuclassics.html';
    $_SESSION['cart'] = array();
    $pepperoniQty = $_POST['pepperoniQty'];
    if($pepperoniQty > 0 && isset($pepperoniQty))
    {
        $pizzaName = "Pepperoni Pizza";
        $subtotal = $pepperoniQty * 10.5;
        array_push($_SESSION['cart'], array($pepperoniQty, $pizzaName, $subtotal));
        $_SESSION['cart']['pepperoniQty'] = $pepperoniQty;
        $_SESSION['cart']['pepperoniname'] = $pizzaName;
        $_SESSION['cart']['pepperonitotal'] = $subtotal;
    }
    $mushcheeseQty = $_POST['mushcheeseQty'];
    if($mushcheeseQty > 0 && isset($mushcheeseQty))
    {
        $pizzaName = "Mushroom and Cheese Pizza";
        $subtotal = $mushcheeseQty * 12;
        array_push($_SESSION['cart'], array($mushcheeseQty, $pizzaName, $subtotal));
        $_SESSION['cart']['mushcheeseQty'] = $mushcheeseQty;
        $_SESSION['cart']['mushcheesename'] = $pizzaName;
        $_SESSION['cart']['mushcheesetotal'] = $subtotal;
    }
    $californianQty = $_POST['californianQty'];
    if($californianQty > 0 && isset($californianQty))
    {
        $pizzaName = "Californian Pizza";
        $subtotal = $californianQty * 14.5;
        array_push($_SESSION['cart'], array($californianQty, $pizzaName, $subtotal));
        $_SESSION['cart']['californianQty'] = $californianQty;
        $_SESSION['cart']['californianname'] = $pizzaName;
        $_SESSION['cart']['californiantotal'] = $subtotal;
    }
    $mixedQty = $_POST['mixedQty'];
    if($mixedQty > 0 && isset($mixedQty))
    {
        $pizzaName = "Mixed Pizza";
        $subtotal = $mixedQty * 16.5;
        array_push($_SESSION['cart'], array($mixedQty, $pizzaName, $subtotal));
        $_SESSION['cart']['mixedQty'] = $mixedQty;
        $_SESSION['cart']['mixedname'] = $pizzaName;
        $_SESSION['cart']['mixedtotal'] = $subtotal;
    }
    print_r($_SESSION['cart']);
?>