<?php
session_start();
header("Location: promotions.php");
$largePizzaQty = $_POST['largePizzaQty'];
$familyPizzaQty = $_POST['familyQty'];
$kidsPizzaQty = $_POST['kidsPizzaQty'];
if(isset($largePizzaQty) && $largePizzaQty > 0)
{
    $pizzaName = "2 Large Pizzas for $20";
    $subtotal = $largePizzaQty * $_SESSION['prices'][8];;
    $_SESSION['cart']['largepizzaqty'] = $largePizzaQty;
    $_SESSION['cart']['largepizzaname'] = $pizzaName;
    $_SESSION['cart']['largepizzatotal'] = $subtotal;
}
if(isset($familyPizzaQty) && $familyPizzaQty > 0)
{
    $pizzaName = "Feed the Family for $15";
    $subtotal = $familyPizzaQty * $_SESSION['prices'][9];;
    $_SESSION['cart']['familypizzaqty'] = $familyPizzaQty;
    $_SESSION['cart']['familypizzaname'] = $pizzaName;
    $_SESSION['cart']['familypizzatotal'] = $subtotal;
}
if(isset($kidsPizzaQty) && $kidsPizzaQty > 0)
{
    $pizzaName = "Kids Pizza for $8";
    $subtotal = $kidsPizzaQty * $_SESSION['prices'][10];;
    $_SESSION['cart']['kidspizzaqty'] = $kidsPizzaQty;
    $_SESSION['cart']['kidspizzaname'] = $pizzaName;
    $_SESSION['cart']['kidspizzatotal'] = $subtotal;
}
?>