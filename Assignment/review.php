<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Review Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="reviewCSS.css">
<script type="text/javascript" src = "validateReview.js"></script>
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
    <div id = "centreform">
    <form method="GET" action = "confirmreview.php" onsubmit="return validateReviewForm()">
        <strong><label>Full Name:* </label></strong><input type="text" name = "FullName" id = "fullname" required><br><br>
        <strong><label>Email Address:* </label></strong><input type="email" name = "email address" id = "emailaddress" required><br><br>
        <strong><label><input type = "radio" name = "radioStar" id = "1Star"/>1 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "2Star"/>2 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "3Star"/>3 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "4Star"/>4 Stars</label></strong>
        <strong><label><input type = "radio" name = "radioStar" id = "5Star"/>5 Stars</label></strong><br><br>
        <textarea name = "enjoyedtextbox" id = "enjoyedtextbox" rows = "6" cols="50" placeholder="What did you enjoy?" required></textarea><br><br>
        <textarea name = "improvedtextbox" id = "improvedtextbox" rows = 6 cols = "50" placeholder="What could be improved" required></textarea><br><br> 
        <input id = "submitbutton" type = "image" src="images/button_submit-review.png" width="150"></form><br><br><br>
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