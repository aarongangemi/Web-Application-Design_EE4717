document.getElementById("add1").addEventListener("click", addPepperoniToCart);
document.getElementById("add2").addEventListener("click", addMushroomToCart);
document.getElementById("add3").addEventListener("click", addCalifornianToCart);
document.getElementById("add1").addEventListener("click", addMargheritaToCart);
document.getElementById("add2").addEventListener("click", addHawaiianToCart);
document.getElementById("add3").addEventListener("click", addPestoToCart);
document.getElementById("add1").addEventListener("click", addPromo1);
document.getElementById("add2").addEventListener("click", addPromo2);
document.getElementById("add3").addEventListener("click", addPromo3);
function addPepperoniToCart()
{
    var qty = document.getElementById("peppqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "NTU's Pepperoni Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);
}
function addMushroomToCart()
{
    var qty = document.getElementById("mushqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "Mushroom and Cheese Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}
function addCalifornianToCart()
{
    var qty = document.getElementById("calqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "NTU's Californian Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}
function addMargheritaToCart()
{
    var qty = document.getElementById("margqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "NTU's Margherita Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}
function addHawaiianToCart()
{
    var qty = document.getElementById("hawqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "NTU's Hawaiian Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}

function addPestoToCart()
{
    var qty = document.getElementById("pestoqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "NTU's Pesto Chicken Pizza";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}

function addPromo1()
{
    var qty = document.getElementById("2largeqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "2 Large Pizzas for $20";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}
function addPromo2()
{
    var qty = document.getElementById("familyqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "Feed the Family for $15";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}

function addPromo3()
{
    var qty = document.getElementById("kidsqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartTable");
    var item = "Kids Pizza for $8";
    var row = cartList.insertRow(0);
    var cellX = row.insertCell(0);
    var cellY = row.insertCell(1);
    cellX.innerHTML = item;
    cellY.innerHTML = "Qty: ".concat(qty);;
}