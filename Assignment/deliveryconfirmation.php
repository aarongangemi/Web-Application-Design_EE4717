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
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
            <div>
                 <strong><a id = "signuplabel" href="signUpLogin.html"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <form id = "ordernowlabel" action = "confirmdelivery.php"><input type = "image" src = "images/button_confirm-delivery.PNG" width = 200px height = 40px></form>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
            <p id = "customerdetails"><?php
            session_start();
            if(!isset($_SESSION['loggedinUser']) || $_SESSION['loggedinUser']['isLoggedIn'] != TRUE)
            {
                header("Location: signUpLogin.html");
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
            <li class="navitem"><a href = "locateus.html">Contact us/Locate Us</a></li>
            <li class="navitem"><a href = "review.html">Review Us</a></li>
            <li class="navitem"><a href = "FAQ Page.html">FAQ</a></li>
            <li class = "navitem"><a href = "disclaimers.html">Disclaimers</a></li>
            <li class="navitem"><a href = "admin.php">Admin</a></li>
        </ul>
    </footer>
    </body>
    </html>