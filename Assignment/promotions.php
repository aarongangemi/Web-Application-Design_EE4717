<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Promotions Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="promotionCSS.css">
</head>
<body>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user = 'root';
    $passwordLogin = '';
    $database = "pizzadatabase";
    $db = new mysqli('localhost', $user, $passwordLogin, $database);
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to database, please try again later";
    }
    $pepperoniQuery = "SELECT Pizza_price FROM pizzas";
    $result = $db->query($pepperoniQuery);
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
        <nav>
            <ul class = "navigationbar">
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
        </nav>
            <div>
                    <strong><a id = "signuplabel" href="signUpLogin.html"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                    <a id = "ordernowlabel" href="cartController.php"><img id = "cartbtn" src = "images/button_go-to-cart.PNG" alt = "cartbutton" width = "150px" height="40px"></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >2 Large Pizza's for $20</label></em></strong>
        <strong><p id = "pizzaText"><img src = "images/2pizzapromotion.PNG" alt = "Large Pizza image" width = "250" height="200">
        <br>NTU's large pizza's are some of<br> biggest and cheesiest pizza's in Singapore.
          Get two 15 inch pizza's<br> for just $20. The pizza's included are<br> meat-lovers and vegetarian.
           Filled with all the delightful meat and vegies.
         Be sure to come and get one now!!!<br><br>
         <label id = "price"><?php echo "Price = ".$_SESSION['prices'][8];?></label><br>
         <form action = "promotionscart.php" method="POST">
             <label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" id = "largePizzaQty" name = "largePizzaQty" value ="<?php echo $_POST['largePizzaQty']; ?>"><br> 
            <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >Feed the Family for $15</label></em></strong>
            <strong><p id = "pizzaText"><img src = "images/familypromotion.PNG" alt = "Family promotion image" width = "250" height="200">
            <br>Looking to feed the family?<br>
            This pizza deal is one not to miss. <br> Get in now and get 3 pizzas for the<br> price of just $15.
            Enjoy a margherita, mushroom and cheese and a pepperoni<br> pizza to share around the table.<br>
            Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices'][9];?></label><br><br>
            <label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" id = "familyQty" name = "familyQty" value ="<?php echo $_POST['familyQty']; ?>"><br> 
                <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >Kids Pizza for $8</label></em></strong>
            <strong><p id = "pizzaText"><img src = "images/kidspizzapromotion.PNG" alt = "kids pizza image" width = "200" height="200">
            <br>Looking for something smaller<br> for the kids?
             A base with<br> napoletana sauce topped with<br> fresh and warm mozzarella cheese.<br>
             This one will guarantee to fill<br> the kids up. A meal for just $8<br>
             Be sure to come and get one now!!!<br><br>
             <label id = "price"><?php echo "Price = ".$_SESSION['prices'][10];?></label><br><br><label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" id = "kidsPizzaQty" name = "kidsPizzaQty" value ="<?php echo $_POST['kidsPizzaQty']; ?>"><br> 
                <input type ="image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"></form><br> 
                </p></strong>
                <footer>
                    <ul class = "footerlist">
                        <li class="navitem"><a href = "locateus.html">Contact us/Locate Us</a></li>
                        <li class="navitem"><a href = "review.html">Review Us</a></li>
                        <li class="navitem"><a href = "FAQ Page.html">FAQ</a></li>
                        <li class="navitem"><a href = "disclaimers.html">Disclaimers</a></li>
                        <li class="navitem"><a href = "admin.php">Admin</a></li>
                    </ul>
                </footer>
                </div>
            </div>    
</body>
</html>