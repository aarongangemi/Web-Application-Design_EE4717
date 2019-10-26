<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Home Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="home.css">
<link rel="Stylesheet" href="homepage.css">
</head>
<body>
    <header>
            <ul class = "navigationbar">
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.PNG" width = "23px" height="10px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
            <div>
                <div class = "dropdown">
                 <strong><a id = "signuplabel" class = "droptxt" href="signUpLogin.html"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <div class = "dropdown-content">
                     <a href="logout.php">Log Out</a>
                     <a href="ntuclassics.php">Order Now</a>
                     <a href="cartController.php">My Cart</a>
                </div>
            </div>
                 <a id = "ordernowlabel" href="ntuclassics.php"><img src = "images/ordernow.PNG" width = 150px height = 40px></a>
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
    <div id = "scrolltop">
        <a href = "promotions.php"><img id = "mainBanner" src="images/PizzaBanner1.PNG" alt="PizzaBanner" width="1520px" height="550px"></a>
    </div>
    <div id = "scrollbottom">
        <a href = "promotions.php"> <img id = "familybanner" src = "images/familyfeedbanner.PNG" alt = "family banner" width = "500px" height="350px"></a>
        <a href = "promotions.php"> <img id = "kidsbanner" src = "images/kidsbanner.PNG" alt = "kidsbanner" width = "500" height = "350px"></a>
    </div>
    <div>
    <footer>
        <ul class = "footerlist">
            <li class="navitem"><a href = "locateus.html">Contact us/Locate Us</a></li>
            <li class="navitem"><a href = "review.html">Review Us</a></li>
            <li class="navitem"><a href = "FAQ Page.html">FAQ</a></li>
            <li class="navitem"><a href = "disclaimers.html">Disclaimers</a></li>
            
        </ul>
    </footer>
    </div>
</body> 
</html>