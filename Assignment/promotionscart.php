<?php
session_start();
header("Location: promotions.html");
$largePizzaQty = $_POST['largePizzaQty'];
$familyPizzaQty = $_POST['familyQty'];
$kidsPizzaQty = $_POST['kidsPizzaQty'];
if(isset($largePizzaQty) && $largePizzaQty > 0)
{
    $pizzaName = "2 Large Pizzas for $20";
    $subtotal = $largePizzaQty * 20;
    $_SESSION['cart']['largepizzaqty'] = $largePizzaQty;
    $_SESSION['cart']['largepizzaname'] = $pizzaName;
    $_SESSION['cart']['largepizzatotal'] = $subtotal;
}
if(isset($familyPizzaQty) && $familyPizzaQty > 0)
{
    $pizzaName = "Feed the Family for $15";
    $subtotal = $familyPizzaQty * 15;
    $_SESSION['cart']['familypizzaqty'] = $familyPizzaQty;
    $_SESSION['cart']['familypizzaname'] = $pizzaName;
    $_SESSION['cart']['familypizzatotal'] = $subtotal;
}
if(isset($kidsPizzaQty) && $kidsPizzaQty > 0)
{
    $pizzaName = "Kids Pizza for $8";
    $subtotal = $kidsPizzaQty * 8;
    $_SESSION['cart']['kidspizzaqty'] = $kidsPizzaQty;
    $_SESSION['cart']['kidspizzaname'] = $pizzaName;
    $_SESSION['cart']['kidspizzatotal'] = $subtotal;
}
?>