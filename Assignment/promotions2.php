<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Student Specials</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="menucss.css">
<link rel="stylesheet" href="studentspecialsCSS.css">
<script type = "text/javascript" src = "menucart.js"></script>
</head>
<body>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user = 'f35ee';
    $passwordLogin = 'f35ee';
    $database = "f35ee";
    $db = new mysqli('localhost', $user, $passwordLogin, $database);
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to database, please try again later";
    }
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = 'NTU Mixed Pizza Promo'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['mixedPromo'] = $row['Pizza_price'];
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = 'Italian Calzone Promo'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['calzonePromo'] = $row['Pizza_price'];
    $query = "SELECT Pizza_price FROM Pizzas WHERE Pizza_Name = 'NTU Sushi Pizza Promo'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $_SESSION['prices']['sushiPromo'] = $row['Pizza_price'];
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
                </div>
            </div>
                <form id = "ordernowlabel" action = "promotions2cart.php" method="POST"><input type = "image" id = "cartbutton" src = "images/button_go-to-cart.png" alt = "cartbutton" width = "150px" height="40px">
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
            <div class = "container">
                    <nav>
                    <ul class = "menunavigationbar">
                        <li class="menunavitem"><strong><a id = "ntuclassicstitle" href = "promotions.php">Our Deals</a></strong></li>
                        <li class="menunavitem"><strong><a id = "studentspecialstitle" href = "promotions2.php">Absolute Steals</a></strong></li>
                    </ul>
                    </nav>
                </div>
    </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >NTU's Mixed Pizza Promo</label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/mixedpizza.png" alt = "mixed Pizza image" width = "220" height="200">
        <br>NTU's mixed pizza deal comes<br> with a range of ingredients.<br>
        Ranging from vegies and cheeses<br> to different seafoods and meats.
        <br>It's one of the most diverse<br> in Singapore. Literally everything!<br> 
         Be sure to come and get one now!!!<br><br>
         <label id = "price"><?php echo "Price = ".$_SESSION['prices']['mixedPromo'];?></label><br><br>
         <label id = "price">Qty: </label><input id = "mixedqtytextbox" type = "number" min="0" class="qty" name = "mixedqtytextbox"><br> 
            <img class = "addicon" src = "images/addicon.png" id = "add1" alt = "add icon here" width = "60px" height="50px" onclick="addPromo4()"><br> 
            </p></strong>
            </div>
        </div>     
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >Italian Calzone Promo</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/italiancalzone.png" alt = "calzone pizza image" width = "220" height="200">
            <br>Prefer something a bit more spicy.<br> A bit more Italian?
            Our famous Italian<br> Calzone comes with all the goods.<br> Pickles, 
            Olives, Sausage and Onions<br> layered on top of warm melted italian<br> mozzarella cheese.<br>
            Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices']['calzonePromo'];?></label><br><br>
            <label id = "price">Qty: </label><input type = "number" min="0" name = "calzoneQty" class="qty" id = "calzoneQty"><br> 
                <img class = "addicon" src = "images/addicon.png" id = "add2" alt = "add icon here" width = "60px" height="50px" onclick="addPromo5()"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Sushi Pizza Promo</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/sushipizza.png" alt = "sushi pizza image" width = "200" height="200">
            <br>NTU's Sushi pizza is an absolute<br> screamer.
             It comes with meats,<br> spice and everything nice. A base<br> layered with cheese topped
             with<br> rice, avocado and spicy chicken<br>You'll want seconds after this one.<br>
             Be sure to come and get one now!!!<br><br>
             <label id = "price"><?php echo "Price = ".$_SESSION['prices']['sushiPromo'];?></label><br><br>
            <label id = "price">Qty: </label><input type = "number" min="0" name = "sushiQty" class="qty" id = "sushiQty"><br> 
                <img class = "addicon" src = "images/addicon.png" id = "add3" alt = "add icon here" width = "60px" height="50px" onclick="addPromo6()"></form><br> 
                </p></strong><br><br>
                </p>
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