var cartArray = [];
var rowIdx = 0;
function addToCartArray(qty)
{
    cartArray.push(qty);
}

function calcCost(pizzaType)
{
    var cost;
    switch(pizzaType)
    {
        case "Pepperoni":
            cost = document.getElementById('pepperoniQty') * 10.50;
            break;
        case "Mushroom and Cheese":
            cost = document.getElementById('mushcheeseQty') * 12;
            break;
        case "Californian":
            cost = document.getElementById('californianQty')  * 14.50;
            break;
        case "mixed":
            cost = document.getElementById('mixedQty') * 16.50;
            break;
        default:
            cost = 0;         
            break;
    }
    return cost;
}

function getCart()
{
    for(var i = 0; i < cartArray.length;i++)
    {
        document.write(cartArray[i]);
    }
}