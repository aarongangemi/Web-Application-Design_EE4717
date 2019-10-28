<?php
session_start();
$largePizzaQty = $_POST['largePizzaQty'];
$familyPizzaQty = $_POST['familyQty'];
$kidsPizzaQty = $_POST['kidsPizzaQty'];
if(isset($largePizzaQty) && $largePizzaQty > 0)
{
    $pizzaName = "2 Large Pizzas for $20";
    $subtotal = $_SESSION['cart']['largepizzatotal'] + $largePizzaQty * $_SESSION['prices']['2 Large Pizzas'];
    $_SESSION['cart']['largepizzaqty'] += $largePizzaQty;
    $_SESSION['cart']['largepizzaname'] = $pizzaName;
    $_SESSION['cart']['largepizzatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if(isset($familyPizzaQty) && $familyPizzaQty > 0)
{
    $pizzaName = "Feed the Family for $15";
    $subtotal = $_SESSION['cart']['familypizzatotal'] + $familyPizzaQty * $_SESSION['prices']['Family Feed'];
    $_SESSION['cart']['familypizzaqty'] += $familyPizzaQty;
    $_SESSION['cart']['familypizzaname'] = $pizzaName;
    $_SESSION['cart']['familypizzatotal'] = $subtotal;
    $_SESSION['noOfItems'] = $_SESSION['noOfItems'] + 1;
}
if(isset($kidsPizzaQty) && $kidsPizzaQty > 0)
{
    $pizzaName = "Kids Pizza for $8";
    $subtotal = $_SESSION['cart']['kidspizzatotal'] + $kidsPizzaQty * $_SESSION['prices']['Kids Pizza'];
    $_SESSION['cart']['kidspizzaqty'] += $kidsPizzaQty;
    $_SESSION['cart']['kidspizzaname'] = $pizzaName;
    $_SESSION['cart']['kidspizzatotal'] = $subtotal;
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