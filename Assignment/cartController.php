<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Cart</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="cartcss.css">
</head>
<body>
    <header>
            <ul class = "navigationbar">
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.png" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.php">Locate Us</a></strong></li>
                <li><strong><a href = "review.php">Review</a></strong></li>
            </ul>
            <div>
            <div>
                <div class = "dropdown">
                 <strong><a id = "signuplabel" class = "droptxt" href="signUpLogin.php"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up<br/>Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <div class = "dropdown-content">
                     <a href="signUpLogin.php">Sign Up</a>
                     <a href="logout.php"><?php if(!isset($_SESSION['loggedinUser'])){echo "Log In";}else{ echo "Log Out";}?></a>
                     <a href="ntuclassics.php">Order Now</a>
                     <a href="cartController.php">My Cart</a>
                </div>
            </div>
                 <form action = "deliveryconfirmation.php" method = "POST"><a id = "ordernowlabel"><input type = "image" id = "submitOrder" src = "images/button_ready-for-delivery.png" width = 220px height = 40px></a>
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="120px"><br><br>
            </div>
            <div id = "column">
            <textarea id = "customisationsbox" name = "customisations" id = "customisations" rows = "25" cols="80" placeholder="Enter Customisations here"></textarea></form>
        </div>
            </header>
    <?php
                function createTableCart($cart)
                {
                    if(isset($_SESSION['cart']))
                    {
                        unset($_SESSION['cart']['No Item Message']);
                        $counter = 0;
                        $total = 0;
                        echo "<table border=\"1\">";
                        echo "<tr><th>Qty</th><th>Pizza</th><th>Subtotal</th></tr>";
                        reset($cart);
                        $value = current($cart);
                        while($value)
                        {
                            echo "<td>".$value."</td>\n";
                            $value = next($cart);
                            $counter++;
                            if($counter == 3)
                            {
                                echo "<tr>";
                                $counter = 0;
                            }
                        }
                        $counter = 0;
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $counter++;
                            if($counter == 3)
                            {
                                $total += $value;
                                $counter = 0;
                            }
                        }
                        echo "<tr><td><td/><td>Total: ".$total."</td>";
                        echo"</table><br><br><br><br>";
                        $_SESSION['loggedinUser']['total'] = $total;
                    }
                }
                if(!isset($_SESSION['cart']))
                {
                    $_SESSION['cart']['No Item Message'] = "No items in Cart";
                }
                if(!isset($_SESSION['loggedinUser']))
                {
                    header("Location: signUpLogin.php");
                }
                createTableCart($_SESSION['cart']);
                ?>
        <?php
        include 'footer.html';
        ?>
</body>
</html>