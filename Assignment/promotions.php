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
    $user = 'f35ee';
    $passwordLogin = 'f35ee';
    $database = "f35ee";
    $db = new mysqli('localhost', $user, $passwordLogin, $database);
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to database, please try again later";
    }
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = '2 Large Pizzas'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['2 Large Pizzas'] = $row['Pizza_price'];
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = 'Family Feed'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['Family Feed'] = $row['Pizza_price'];
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = 'Kids Pizza'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['Kids Pizza'] = $row['Pizza_price'];
    $db->close();
    ?>
    <header>
        <nav>
            <ul class = "navigationbar">
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.png" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.php">Locate Us</a></strong></li>
                <li><strong><a href = "review.php">Review</a></strong></li>
            </ul>
        </nav>
        <div>
                <div class = "dropdown">
                 <strong><a id = "signuplabel" class = "droptxt" href="signUpLogin.php"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <div class = "dropdown-content">
                     <a href="signUpLogin.php">Sign Up</a>
                     <a href="logout.php"><?php if(!isset($_SESSION['loggedinUser'])){echo "Log In";}else{ echo "Log Out";}?></a>
                     <a href="ntuclassics.php">Order Now</a>
                     <a href="cartController.php">My Cart</a>
                     <a href="admin.php">Admin</a>
                </div>
            </div>
                  <form id = "ordernowlabel" action = "promotionscart.php" method="POST"><input type = "image" id = "cartbutton" src = "images/button_go-to-cart.png" alt = "cartbutton" width = "150px" height="40px">
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
            <div class = "container">
                    <nav>
                    <ul class = "menunavigationbar">
                        <li class="menunavitem"><strong><a id = "menunavitem" href = "promotions.php">Our Deals</a></strong></li>
                        <li class="menunavitem"><strong><a id = "menuitemnoborder" href = "promotions2.php">Absolute Steals</a></strong></li>
                    </ul>
                    </nav>
                </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" ><?php $str = explode('.',$_SESSION['prices']['2 Large Pizzas']);echo "2 Large Pizza's for $".$str[0];?> </label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/2pizzapromotion.png" alt = "2 large pizza image" width = "250" height="200">
        <br>NTU's large pizza's are some <br>of biggest and cheesiest pizza's<br> in Singapore.
          Get two 15 inch<br> pizza's for just $20. The pizza's<br> included are meat-lovers and<br> vegetarian.
           Filled with all the<br> delightful meat and vegies.<br>
         Be sure to come and get one now!!!<br><br>
         <label id = "price"><?php echo "Price = ".$_SESSION['prices']['2 Large Pizzas'];?></label><br><br>
             <label id = "price">Qty: </label><input id = "2largeqtytextbox" type = "number" min="0" id = "largePizzaQty" class="qty" name = "largePizzaQty"><br> 
            <img class = "addicon" src = "images/addicon.png" id = "add1" alt = "add icon here" width = "60px" height="50px" onclick="addPromo1()"><br>
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" ><?php $str = explode('.',$_SESSION['prices']['Family Feed']);echo "Feed the Family for $".$str[0];?></label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/familypromotion.png" alt = "Family Feed image" width = "250" height="200">
            <br>Looking to feed the family?<br>
            This pizza deal is one not to miss.<br> Get in now and get 3 pizzas<br> for the price of just $15.<br>
            Enjoy a margherita, mushroom and<br> cheese and a pepperoni pizza to <br> share around the table.<br>
            Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices']['Family Feed'];?></label><br><br>
            <label id = "price">Qty: </label><input id = "familyqtytextbox" type = "number" min="0" class="qty" id = "familyQty" name = "familyQty"><br> 
                <img class = "addicon" src = "images/addicon.png" id = "add2" alt = "add icon here" width = "60px" height="50px" onclick="addPromo2()"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" ><?php $str = explode('.',$_SESSION['prices']['Kids Pizza']);echo "Kids Pizza for $".$str[0];?></label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/kidspizzapromotion.png" alt = "Kids pizza image" width = "250" height="200">
            <br>Looking for something smaller<br> for the kids?
             A base with<br> napoletana sauce topped with fresh<br> and warm mozzarella cheese.<br>
             This one will guarantee to fill<br> the kids up. A meal for just $8.<br>
             Be sure to come and get one now!!!<br><br><br>
             <label id = "price"><?php echo "Price = ".$_SESSION['prices']['Kids Pizza'];?></label><br><br><label id = "price">Qty: </label><input id = "kidsqtytextbox" class="qty" type = "number" min="0" id = "kidsPizzaQty" name = "kidsPizzaQty"><br> 
                <img class = "addicon" src = "images/addicon.png" id = "add3"alt = "add icon here" width = "60px" height="50px" onclick="addPromo3()"></form><br> 
                </p></strong>
                </p></strong><br>
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