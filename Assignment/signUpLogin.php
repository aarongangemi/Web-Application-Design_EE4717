<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Sign Up/Login</title>
<link rel="stylesheet" href="index.css">
<link rel= "stylesheet" href= "signin.css">
<script type="text/javascript" src="signupvalidator.js"></script>
</head>
<body>
    <header>
            <?php
            include 'headerOrderNow.php';
            ?> 
    </header>
    <div class="row">
        <div class="column" id = "signinbox">
            <form action="create_user.php" method = "POST" onsubmit=" return validateSignup()" id = "frm1">
                <h1>Create an Account</h1>
                <label><b>Full Name*</b></label><br>
                <input type="text" placeholder="Enter Full Name (E.g. John Doe)" name = "fullname" id = "fullname" required><br><br>
                <label><b>Email*</b></label><br>
                <input type = "email" placeholder="Enter Email Address" name = "emailfield" id = "email" required><br><br>
                <label><b>Password* (Must have at least 1 capital letter and contains at least 8 digits)</b></label><br>
                <input type = "password" placeholder="Enter Password" name = "password" id = "password" required><br><br>
                <label><b>Date of Birth*</b></label><br>
                <input type="date" placeholder="Enter D.O.B" name="dateofBirth" id = "dateofbirth" required><br><br>
                <label><b>Delivery Address*</b></label><br>
                <input id = "housenumber" type = "number" placeholder="Unit/Apt No*" name = "houseNumber" id = "houseNumber" min = "1" required>
                <input id = "streetname" type = "text" placeholder="Enter Street Name*" name = "streetName" id = "streetText" required><br><br>
                <input id = "suburb" type = "text" placeholder="Enter Suburb*" name = "suburbName" id = "suburbName" required/>
                <input id = "postcode" type = "number" placeholder="Enter Postcode*" name ="postcode" id = "postcode" required/>
                <input id = "country" type = "text" value="Singapore" readonly> 
                <input id = "createacntbtn" type = "submit" value="Create Account"></form>
        </div>
        <div class="column">
                <h1>Login to Account</h1>
                <form action="login.php" method = "POST" onsubmit="return validateLogin()">
                <label><b>Email*</b></label><br>
                <input type = "email" placeholder="Enter Email Address" name = "emailfieldLogin" id = "email" required><br><br>
                <label><b>Password*</b></label><br>
                <input type = "password" placeholder="Enter Password" name = "passwordLogin" id = "passwordLogin" required><br><br>
                <input id = "createacntbtn" type="submit" value="Login"><br><br>
                <b><strong><label id = "warning">*You must login/signup before you submit an order for delivery.<br></label></strong></b>
                <b><strong><label id = "warning">*If returned here after login, login was unsuccessful.</label></strong></b>
                </form>
        </div>
    </div> 
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['alertUser']))
    {
        $_SESSION['alertUser'] = false;
    }
    if($_SESSION['alertUser'] == true)
    {
        echo "<script type='text/javascript'>
        alert('Invalid Login, Please try again');
        </script>";
        $_SESSION['alertUser'] = false;
    }
    include 'footer.html';
    ?>
</body> 
</html>