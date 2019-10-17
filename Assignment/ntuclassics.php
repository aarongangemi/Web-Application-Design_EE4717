<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - NTU Classics</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="menucss.css">
<script type="text/javascript" src="cartJS.js"></script>
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
                <li class="navitem"><strong><a href = "index.html"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
        </nav>
            <div>
                  <strong><a id = "signuplabel" href="signUpLogin.html">Sign Up/Login</a></strong>
                  <a id = "ordernowlabel" href = "cartController.php"><img id = "cartbutton" src = "images/button_go-to-cart.PNG" alt = "cartbutton" width = "150px" height="40px"></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
            <div>
                    <nav>
                    <ul class = "menunavigationbar">
                        <li class="menunavitem"><strong><a id = "menunavitem" href = "ntuclassics.php">NTU Classics</a></strong></li>
                        <li class="menunavitem"><strong><a id = "menuitemnoborder" href = "studentspecials.php">Student Specials</a></strong></li>
                    </ul>
                    </nav>
                </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >NTU's Pepperoni Pizza</label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/Pepperoni-Pizza.PNG" alt = "Pepperoni pizza image" width = "200" height="200">
        <br>NTU's famous Pepperoni pizza<br> is one of our most delicious pizza's.
          <br>With a crust that is cooked to<br> perfection.Spread with
           the secret<br> cheese and covered with NTU's<br>
            famous pepperoni. Be sure to <br>come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices'][0];?></label>
            <form action="ntuclassicscart.php" method="POST"><label id = "price">Qty: </label><input id = "qtytextbox" name = "pepperoniQty" type = "number" min="0" value ="<?php echo $_POST['pepperoniQty']; ?>"><br> 
            <input type = image id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Mushroom and Cheese Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/mushroomcheese.PNG" alt = "Mushroom and Cheese pizza image" width = "200" height="200">
            <br>NTU's reknowned Mushroom and<br> Cheese pizza is a 
            change up from<br> the traditional margherita pizza. <br>Enjoy a fresh base 
            topped with<br> warm mozzarella cheese. Spread<br> with
               our famous mushroom.Be sure<br> to come and get one now!!!<br><br>
               <label id = "price"><?php echo "Price = ".$_SESSION['prices'][1];?></label><br><br>
               <form action="ntuclassicscart.php" method="POST"><label id = "price">Qty: </label><input id = "qtytextbox" name = "mushcheeseQty" type = "number" min="0" id = "mushcheeseQty" value ="<?php echo $_POST['mushcheeseQty']; ?>"><br> 
                <input type = image id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Californian Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/californianpizza.PNG" alt = "Californian pizza image" width = "200" height="200">
            <br>NTU's Californian pizza is a<br> pizza you won't want to miss.
             <br>With a crust surrounded by our<br> mouth-watering napoletana sauce.<br>
             Smothered with our secret<br> cheese, basil, ham and pineapple.<br> 
             Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices'][2];?></label><br><br>
            <label id = "price">Qty: </label><input id = "qtytextbox" name = "californianQty" type = "number" min="0" id = "californianQty" value ="<?php echo $_POST['californianQty']; ?>"><br> 
            <input type = image id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
                </p></strong>
                </div>
            </div>   
            <div class="row">
                <div class = "column">
                <strong><em><label id = "pizzatitle" >NTU's Mixed Pizza</label></em></strong>
                <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/mixedpizza.PNG" alt = "Mixed pizza image" width = "200" height="200">
                <br>NTU's Mixed Pizza is our<br>
                 most popular pizza. Our Pizza<br> gives you a variety
                 to enjoy.<br>From prawn to pineapple, the<br> pizza is topped with every<br> ingredient we offer.
                 Be sure to <br>come and get one now!!!<br><br>
                 <label id = "price"><?php echo "Price = ".$_SESSION['prices'][3];?></label><br><br>
                 <label id = "price">Qty: </label><input id = "qtytextbox" name = "mixedQty" type = "number" min="0" id = "mixedQty" value ="<?php echo $_POST['mixedQty']; ?>"><br> 
                    <input type = image id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"></form><br> 
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