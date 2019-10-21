<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Student Specials</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="menucss.css">
<link rel="stylesheet" href="studentspecialsCSS.css">
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
                <a id = "ordernowlabel" href = "cartController.php"><img id = "cartbutton" src = "images/button_go-to-cart.PNG" alt = "cartbutton" width = "150px" height="40px"></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
            <div>
                    <nav>
                    <ul class = "menunavigationbar">
                        <li class="menunavitem"><strong><a id = "ntuclassicstitle" href = "ntuclassics.php">NTU Classics</a></strong></li>
                        <li class="menunavitem"><strong><a id = "studentspecialstitle" href = "studentspecials.php">Student Specials</a></strong></li>
                    </ul>
                    </nav>
                </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >NTU's Margherita Pizza</label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/margheritapizza.PNG" alt = "Pepperoni pizza image" width = "200" height="200">
        <br>NTU's famous Margherita pizza<br> is our cheesiest pizza.
          A cheesy<br> delight filled and topped with<br> tomatoes and to add
           extra flavour,<br> sprikled with basil. Be sure to try<br> this cheesy sensation.
         Be sure to <br>come and get one now!!!<br><br>
         <label id = "price"><?php echo "Price = ".$_SESSION['prices'][4];?></label><br>
         <form action = "studentspecialscart.php" method="POST"><label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" name = "margheritaQty" id = "margheritaQty" value ="<?php echo $_POST['margheritaQty']; ?>"><br> 
            <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Hawaiian Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/hawaiianpizza.PNG" alt = "Pepperoni pizza image" width = "220" height="200">
            <br>Ham and Cheese not enough?<br> Why not add Pineapple? 
            This pizza<br> is covered with fresh thick-cut ham,<br> warm cheese and our famous crunchy<br> pineapple. 
            Enjoy a fresh woodfired<br> base and that delicious crunch.<br> Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices'][5];?></label><br><br>
            <label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" name = "hawaiianQty" id = "hawaiianQty" value ="<?php echo $_POST['hawaiianQty']; ?>"><br> 
                <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Pesto Peri Chicken Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/pestoperichickenpizza.PNG" alt = "Pepperoni pizza image" width = "200" height="200">
            <br>NTU's Pesto Peri Chieck pizza<br> is a one of a kind.
             A base with<br> napoletana sauce replaced with<br> our divine pesto sauce.
             A mouth-<br>watering pizza, smothered with<br> chicken, ham, capsicum and olives.<br> 
             Be sure to come and get one now!!!<br><br>
             <label id = "price"><?php echo "Price = ".$_SESSION['prices'][6];?></label><br><br>
             <label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" name = "pestoQty" id = "pestoQty" value ="<?php echo $_POST['pestoQty']; ?>"><br> 
                <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"><br> 
                </p></strong>
                </div>
            </div>   
            <div class="row">
                <div class = "column">
                <strong><em><label id = "pizzatitle" >NTU's Vegeterian pizza</label></em></strong>
                <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/vegetarianpizza.PNG" alt = "Pepperoni pizza image" width = "200" height="200">
                <br>Looking for a vegeterian option?.<br> Our vegetarian pizza gives<br> you a variety
                 of vegies to<br> enjoy. The pizza is topped<br> with cucumber, tomato, onion and<br> capsicum.
                Be sure to come and get<br> one now!!!<br><br>
                <label id = "price"><?php echo "Price = ".$_SESSION['prices'][7];?></label><br><br>
                <label id = "price">Qty: </label><input id = "qtytextbox" type = "number" min="0" name = "vegetarianQty" id = "vegetarianQty" value ="<?php echo $_POST['vegetarianQty']; ?>"><br> 
                    <input type = "image" id = "addicon" src = "images/addicon.PNG" alt = "add icon here" width = "60px" height="50px"></form><br> 
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