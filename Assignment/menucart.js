document.getElementById("addicon").addEventListener("click", addPepperoniToCart);
document.getElementById("addicon").addEventListener("click", addMushroomToCart);
document.getElementById("addicon").addEventListener("click", addCalifornianToCart);
function addPepperoniToCart()
{
    var qty = document.getElementById("peppqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Pepperoni Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}
function addMushroomToCart()
{
    var qty = document.getElementById("mushqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Mushroom and Cheese Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}
function addCalifornianToCart()
{
    var qty = document.getElementById("calqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Californian Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}
function addMargheritaToCart()
{
    var qty = document.getElementById("margqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Margherita Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}
function addHawaiianToCart()
{
    var qty = document.getElementById("hawqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Hawaiian Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}

function addPestoToCart()
{
    var qty = document.getElementById("pestoqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "NTU's Pesto and Peri Chicken Pizza";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}

function addPromo1()
{
    var qty = document.getElementById("2largeqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "2 Large Pizzas for $20";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}
function addPromo2()
{
    var qty = document.getElementById("familyqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "Feed the Family for $15";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}

function addPromo3()
{
    var qty = document.getElementById("kidsqtytextbox").value;
    if(qty < 0)
    {
        alert("Please enter a qty greater than 0");
        return false;
    }
    var cartList = document.getElementById("cartList");
    var item = "Kids Pizza for $8";
    var node = document.createElement("LI");
    var text = document.createTextNode(item.concat(" | ").concat("Qty:",qty));
    node.appendChild(text);
    cartList.appendChild(node);
}