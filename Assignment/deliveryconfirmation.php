<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Delivery Confirmation</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="delivery.css">
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
                 <strong><a id = "signuplabel" class = "droptxt" href="signUpLogin.php"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <div class = "dropdown-content">
                     <a href="signUpLogin.php">Sign Up</a>
                     <a href="logout.php"><?php if(!isset($_SESSION['loggedinUser'])){echo "Log In";}else{ echo "Log Out";}?></a>
                     <a href="ntuclassics.php">Order Now</a>
                     <a href="cartController.php">My Cart</a>
                </div>
            </div>
                 <form id = "ordernowlabel" action = "confirmdelivery.php"><input type = "image" src = "images/button_confirm-delivery.png" width = 200px height = 40px></form>
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
            <p id = "customerdetails"><?php
            if(!isset($_SESSION))
            {
                session_start();
            }
            if(!isset($_SESSION['loggedinUser']) || $_SESSION['loggedinUser']['isLoggedIn'] != TRUE)
            {
                header("Location: signUpLogin.php");
            }
            else
            {
                echo "Customer Name: ". $_SESSION['loggedinUser']['fullname']."<br/><br/><br/>";
                echo "Date of Birth: ". $_SESSION['loggedinUser']['DOB']."<br/><br/><br/>";
                echo "Email: ".$_SESSION['loggedinUser']['email']."<br/><br/><br/>";
                echo "Delivery Address: ". $_SESSION['loggedinUser']['deliveryAddress']."<br/><br/><br/>";
                date_default_timezone_set("Australia/Perth");
                echo "Date/Time of Order Submission: ".date('H:i,jS F Y')."<br/><br/><br/>";
                if(trim($_POST['customisations']) == "")
                {
                    echo "Customisations: NONE"."<br/><br/><br/>";
                }
                else
                {
                    echo "Customisations: ".$_POST['customisations']."<br/><br/><br/>";
                }
                if(isset($_SESSION['loggedinUser']['total']))
                {
                     echo "Total price: $".$_SESSION['loggedinUser']['total']."<br/><br/><br/><br/><br/>";
                }
            }
            ?></p>
    <footer>
        <ul class = "footerlist">
            <li class="navitem"><a href = "locateus.php">Contact us/Locate Us</a></li>
            <li class="navitem"><a href = "review.php">Review Us</a></li>
            <li class = "navitem"><a href = "disclaimers.html">Disclaimers</a></li>
            
        </ul>
    </footer>
    </body>
    </html>