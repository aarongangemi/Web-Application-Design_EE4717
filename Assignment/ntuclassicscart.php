<?php
session_start(); 
    $pepperoniQty = $_POST['pepperoniQty'];
    if($pepperoniQty > 0 && isset($pepperoniQty))
    {
        $pizzaName = "Pepperoni Pizza";
        $subtotal = $_SESSION['cart']['pepperonitotal'] + ($pepperoniQty * $_SESSION['prices'][0]);
        $_SESSION['cart']['pepperoniQty'] += $pepperoniQty;
        $_SESSION['cart']['pepperoniname'] = $pizzaName;
        $_SESSION['cart']['pepperonitotal'] = $subtotal;
        $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
         
    }
    $mushcheeseQty = $_POST['mushcheeseQty'];
    if($mushcheeseQty > 0 && isset($mushcheeseQty))
    {
        $pizzaName = "Mushroom and Cheese Pizza";
        $subtotal = $_SESSION['cart']['mushcheesetotal'] + ($mushcheeseQty * $_SESSION['prices'][1]);
        $_SESSION['cart']['mushcheeseQty'] += $mushcheeseQty;
        $_SESSION['cart']['mushcheesename'] = $pizzaName;
        $_SESSION['cart']['mushcheesetotal'] = $subtotal;
        $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
    }
    $californianQty = $_POST['californianQty'];
    if($californianQty > 0 && isset($californianQty))
    {
        $pizzaName = "Californian Pizza";
        $subtotal = $_SESSION['cart']['californiantotal'] + ($californianQty * $_SESSION['prices'][2]);
        $_SESSION['cart']['californianQty'] += $californianQty;
        $_SESSION['cart']['californianname'] = $pizzaName;
        $_SESSION['cart']['californiantotal'] = $subtotal;
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