<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - NTU Classics</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="menucss.css">
<script type="text/javascript" src="cartJS.js"></script>
<script type="text/javascript" src="menucart.js"></script>
</head>
<body>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['noOfItems']))
    {
        $_SESSION['noOfItems'] = 0;
    }
    $user = 'f35ee';;
    $passwordLogin = 'f35ee';
    $database = "f35ee";
    $db = new mysqli('localhost', $user, $passwordLogin, $database);
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to database, please try again later";
    }
    $query = "SELECT Pizza_price FROM Pizzas";
    $result = $db->query($query);
    if ($result) {
    for($i = 0; $i < $result->num_rows; $i++)
    {
        $row = $result->fetch_assoc();
        $_SESSION['prices'][$i] = $row['Pizza_price'];
    }
    }
    $db->close();
    ?>
    <header>
        <?php
        include 'menuheader.php';
        ?>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >NTU's Pepperoni Pizza</label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/Pepperoni-Pizza.png" alt = "Pepperoni pizza image" width = "200" height="200">
        <br>NTU's famous Pepperoni pizza<br> is one of our most delicious pizza's.
          <br>With a crust that is cooked to<br> perfection.Spread with
           the secret<br> cheese and covered with NTU's<br>
            famous pepperoni. Be sure to <br>come and get one now!!!<br><br>
            <label id = "price" name = "peppprice"><?php echo "Price = ".$_SESSION['prices'][0];?></label><br><br>
            <label id = "price">Qty: </label><input id = "peppqtytextbox" class="qty" name = "pepperoniQty" type = "number" min="0"><br> 
            <img class = "addicon" id = "add1" src = "images/addicon.png" alt = "add icon here" width = "60px" height="50px" onclick="addPepperoniToCart()"><br>
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Mushroom and Cheese Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/mushroomcheese.png" alt = "Mushroom and Cheese pizza image" width = "200" height="200">
            <br>NTU's reknowned Mushroom and<br> Cheese pizza is a 
            change up from<br> the traditional margherita pizza. <br>Enjoy a fresh base 
            topped with<br> warm mozzarella cheese. Spread<br> with
               our famous mushroom.Be sure<br> to come and get one now!!!<br><br>
               <label id = "price" name = "mushprice"><?php echo "Price = ".$_SESSION['prices'][1];?></label><br><br>
               <label id = "price">Qty: </label><input id = "mushqtytextbox" class="qty" name = "mushcheeseQty" type = "number" min="0" id = "mushcheeseQty"><br> 
               <img class = "addicon" id = "add2" src = "images/addicon.png" alt = "add icon here" width = "60px" height="50px" onclick="addMushroomToCart()"><br>
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Californian Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/californianpizza.png" alt = "Californian pizza image" width = "200" height="200">
            <br>NTU's Californian pizza is a<br> pizza you won't want to miss.
             <br>With a crust surrounded by our<br> mouth-watering napoletana sauce.<br>
             Smothered with our secret<br> cheese, basil, ham and pineapple.<br> 
             Be sure to come and get one now!!!<br><br>
            <label id = "price" name = "calprice"><?php echo "Price = ".$_SESSION['prices'][2];?></label><br><br>
            <label id = "price">Qty: </label><input id = "calqtytextbox" name = "californianQty" class="qty" type = "number" min="0" id = "californianQty"></form><br> 
            <img class = "addicon" id = "add3" src = "images/addicon.png" alt = "add icon here" width = "60px" height="50px" onclick="addCalifornianToCart()"><br>
                </p></strong><br><br>
                </div>
            </div>   
            <div class = "row">
            <div class = "column">
                <b><p id = "tablelabel">Items Added:</p></b><br>
                <table id = "cartTable">
                        <tr>
                            <th>Cart Item</th>
                            <th>Quantity</th>
                        </tr>
                </table>
            </div>
        </div>
        <?php
            if(!isset($_SESSION['alertUser']))
            {
                 $_SESSION['alertUser'] = false;
            }
            if($_SESSION['alertUser'] == true)
            {
                echo "<script type='text/javascript'>
                alert('Cart must be more than 0, Please go back');
                </script>";
                $_SESSION['alertUser'] = false;
            }
        ?>
</body>
</html>