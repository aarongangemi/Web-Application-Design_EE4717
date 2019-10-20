function computeCost()
{
    var javaQty = document.getElementById("Just Java").value;
    var cafeQty = document.getElementById("Cafe au Lait").value;
    var icedCapp = document.getElementById("Iced Cappucino").value;
    document.getElementById("totalCost").value = (javaQty * 2.00); 
}