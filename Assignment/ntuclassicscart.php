<?php
session_start();   
    header("Location: ntuclassics.php");
    $pepperoniQty = $_POST['pepperoniQty'];
    if($pepperoniQty > 0 && isset($pepperoniQty))
    {
        $pizzaName = "Pepperoni Pizza";
        $subtotal = $pepperoniQty * $_SESSION['prices'][0];
        $_SESSION['cart']['pepperoniQty'] = $pepperoniQty;
        $_SESSION['cart']['pepperoniname'] = $pizzaName;
        $_SESSION['cart']['pepperonitotal'] = $subtotal;
    }
    $mushcheeseQty = $_POST['mushcheeseQty'];
    if($mushcheeseQty > 0 && isset($mushcheeseQty))
    {
        $pizzaName = "Mushroom and Cheese Pizza";
        $subtotal = $mushcheeseQty * $_SESSION['prices'][1];
        $_SESSION['cart']['mushcheeseQty'] = $mushcheeseQty;
        $_SESSION['cart']['mushcheesename'] = $pizzaName;
        $_SESSION['cart']['mushcheesetotal'] = $subtotal;
    }
    $californianQty = $_POST['californianQty'];
    if($californianQty > 0 && isset($californianQty))
    {
        $pizzaName = "Californian Pizza";
        $subtotal = $californianQty * $_SESSION['prices'][2];;
        $_SESSION['cart']['californianQty'] = $californianQty;
        $_SESSION['cart']['californianname'] = $pizzaName;
        $_SESSION['cart']['californiantotal'] = $subtotal;
    }
    $mixedQty = $_POST['mixedQty'];
    if($mixedQty > 0 && isset($mixedQty))
    {
        $pizzaName = "Mixed Pizza";
        $subtotal = $mixedQty * $_SESSION['prices'][3];;
        $_SESSION['cart']['mixedQty'] = $mixedQty;
        $_SESSION['cart']['mixedname'] = $pizzaName;
        $_SESSION['cart']['mixedtotal'] = $subtotal;
    }

    function getPrice(){

    }
?>