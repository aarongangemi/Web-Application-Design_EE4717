<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Locate Us</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="locate.css">
</head>
<body>
    <header>
            <ul class="navigationbar">
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.png" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.php">Locate Us</a></strong></li>
                <li><strong><a href = "review.php">Review</a></strong></li>
            </ul>
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
            <div>
                 <a id = "ordernowlabel" href="ntuclassics.php"><img src = "images/ordernow.png" width = 150px height = 40px></a>
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="120px">
            </div>
    </header>    
    <div class = "location">
            <strong><p id = "locationtext">Find us here:</p></strong>
            <img id = "locationimage" src = "images/location.PNG" alt = "Our location" width = "400px" height = "270px">
    </div>
    <div>
            <strong><label id = "hoursTitle">Opening Hours:</label></strong>
            <ul class = "hourslist">
                <li>Monday: 9.30am - 10pm</li>
                <li>Tuesday: 9.30am - 10pm</li>
                <li>Wednesday: 9.30am - 10pm</li>
                <li>Thursday: 9.30am - 10pm</li>
                <li>Friday: 9.30am - 12am</li>
                <li>Saturday: 9.30am - 12am</li>
                <li>Sunday: 9.30am - 11pm</li>
            </ul>
            <strong><label id = "hoursTitle">Delivery Hours:</label></strong>
            <ul class = "hourslist">
                <li>Monday to Thursday: 12pm - 10am</li>
                <li>Friday: 9.30 - 12am</li>
                <li>Saturday: 9.30am - 12am</li>
                <li>Sunday: 9.30am - 12am</li>
            </ul>
            <strong><label id = "addresstitle">Our Address:</label></strong>
            <p id = "addressdetails">62 Nanyang Crescent, Singapore<br>(Inside NTU Campus, across from Binjai Hall)</p>
            <strong><label id = "addresstitle">Contact Us:</label></strong>
            <p id = "contactdetails">Phone Number: 61459491711<br>
               NTU@ThePizzeria.com.au</p><br><br><br>
        </div>
               <footer>
                    <ul class = "footerlistX">
                            <li class="navitem"><a href = "locateus.php">Contact us/Locate Us</a></li>
                            <li class="navitem"><a href = "review.php">Review Us</a></li>
                            <li class="navitem"><a href = "disclaimers.html">Disclaimers</a></li>
                            
                        </ul>
               </footer>
</body> 
</html>