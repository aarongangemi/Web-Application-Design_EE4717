function calculateCost(itemName)
{
    var cost;
    switch(itemName)
    {
        case "EndlessCup":
            cost = 2.00;
            break;
        case "CafeSingle":
            cost = 2.00;
            break;
        case "CafeDouble":
            cost = 3.00;
            break;
        case "IcedCappSingle":
            cost = 4.75;
            break;
        case "IcedCappDouble":
            cost = 5.75;
            break;                
    }
    return cost;
}

function computeCost()
{
    var javaQty = document.getElementById("Just Java").value;
    var cafeQty = document.getElementById("Cafe au Lait").value;
    var cappQty = document.getElementById("Iced Cappucino").value;
    var domain = document.getElementById("form1");
    var domain2 = document.getElementById("form2");
    var valueCafe = 0;
    var valueCapp = 0;
    for (var index = 0; index < domain.radioButton.length; index++) 
    {
         if (domain.radioButton[index].checked) 
         {
              valueCafe = domain.radioButton[index].value;
              break;
         }
    }
    for (var index = 0; index < domain2.radioButton.length; index++) 
    {
         if (domain2.radioButton[index].checked) 
         {
              valueCapp = domain2.radioButton[index].value;
              break;
         }
    }
    document.getElementById("totalCost").value = (javaQty * 2.00) + (cafeQty * valueCafe) + (cappQty * valueCapp);
    calcSubtotal(javaQty, cafeQty, valueCafe, cappQty, valueCapp);
}

function calcSubtotal(javaQty, cafeQty, valueCafe, cappQty, valueCapp)
{
    document.getElementById("JustJavaTotal").value = javaQty * 2.00;
    document.getElementById("CafeauLaitTotal").value = cafeQty * valueCafe;
    document.getElementById("IcedCappucinoTotal").value = cappQty * valueCapp;   
}

function checkBox(checkedData)
{
    switch(checkedData)
    {
        case "java":
            document.getElementById("cafechecked").checked = false;
            document.getElementById("cappchecked").checked = false;
            document.getElementById("javanewprice").focus();
            document.getElementById("javanewprice").disabled = false;
            document.getElementById("cafenewpricesingle").disabled = true;
            document.getElementById("cafenewpricedouble").disabled = true;
            document.getElementById("cappnewpricesingle").disabled = true;
            document.getElementById("cappnewpricedouble").disabled = true;
            document.getElementById("updatejavabtn").disabled = false;
            document.getElementById("updatecafebtn").disabled = true;
            document.getElementById("updatecappbtn").disabled = true;
            break;
        case "cafe":
            document.getElementById("javachecked").checked = false;
            document.getElementById("cappchecked").checked = false;
            document.getElementById("cafenewpricesingle").focus();
            document.getElementById("cafenewpricedouble").focus();
            document.getElementById("javanewprice").disabled = true;
            document.getElementById("cafenewpricesingle").disabled = false;
            document.getElementById("cafenewpricedouble").disabled = false;
            document.getElementById("cappnewpricesingle").disabled = true;
            document.getElementById("cappnewpricedouble").disabled = true;
            document.getElementById("updatejavabtn").disabled = true;
            document.getElementById("updatecafebtn").disabled = false;
            document.getElementById("updatecappbtn").disabled = true;
            break;
        case "capp":
            document.getElementById("javachecked").checked = false;
            document.getElementById("cappchecked").checked = false;
            document.getElementById("cafenewpricesingle").focus();
            document.getElementById("cafenewpricedouble").focus();
            document.getElementById("javanewprice").disabled = true;
            document.getElementById("cafenewpricesingle").disabled = true;
            document.getElementById("cafenewpricedouble").disabled = true;
            document.getElementById("cappnewpricesingle").disabled = false;
            document.getElementById("cappnewpricedouble").disabled = false;
            document.getElementById("updatejavabtn").disabled = true;
            document.getElementById("updatecafebtn").disabled = true;
            document.getElementById("updatecappbtn").disabled = false;
            break;
            break;
    }
}