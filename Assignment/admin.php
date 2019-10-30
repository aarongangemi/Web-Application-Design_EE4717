<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Home Page</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="admin.css">
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
                     <a href="admin.php">Admin</a>
                </div>
            </div>
            <div>
               <br><img class = "companyLogo" src = "images/logo.png" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['prices']))
    {
        $user = 'f35ee';;
        $passwordLogin = 'f35ee';
        $database = "f35ee";
        $db = new mysqli('localhost', $user, $passwordLogin, $database);
        if(mysqli_connect_errno())
        {
            echo "Error: Could not connect to database, please try again later";
        }
        $Query = "SELECT Pizza_price FROM Pizzas";
        $result = $db->query($Query);
        if ($result) {
        for($i = 0; $i < $result->num_rows; $i++)
        {
            $row = $result->fetch_assoc();
            $_SESSION['prices'][$i] = $row['Pizza_price'];
        }
        }
        $db->close();
    }
        ?>
    <table><form action = "updateNTUClassics.php" method="POST">
        <?php if(!$_SESSION){session_start();}?>
        <b><label>NTU Classics</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
        </tr>
        <tr>
            <td>NTU's Pepperoni Pizza</td>
            <td><input type = "text" name = "newpepperoniprice" value= "<?php echo $_SESSION['prices'][0]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Mushroom and Cheese Pizza</td>
            <td><input type = "text" name = "newmushcheeseprice" value= "<?php echo $_SESSION['prices'][1]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Californian Pizza</td>
            <td><input type = "text" name = "newcalifornianprice" value= "<?php echo $_SESSION['prices'][2]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
        <table><form action = "updatestudentspecials.php" method="POST"><br>
        <b><label>NTU Student Specials</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
        </tr>
        <tr>
            <td>NTU's Margherita Pizza</td>
            <td><input type = "text" name = "newmargheritaprice" value= "<?php echo $_SESSION['prices'][3]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Hawaiian Pizza</td>
            <td><input type = "text" name = "newhawaiianprice" value= "<?php echo $_SESSION['prices'][4]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Pesto and Peri Chicken Pizza</td>
            <td><input type = "text" name = "newpestoperiprice" value= "<?php echo $_SESSION['prices'][5]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
        <table><form action = "updatePromotions.php" method="POST"><br>
        <b><label>NTU Promotions</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
        </tr>
        <tr>
            <td>2 Large Pizza's for $20</td>
            <td><input type = "text" name = "2largepizzasprice" value= "<?php echo $_SESSION['prices'][6]; ?>"></td>
        </tr>
        <tr>
            <td>Feed the Family for $15</td>
            <td><input type = "text" name = "familyfeedprice" value= "<?php echo $_SESSION['prices'][7]; ?>"></td>
        </tr>
        <tr>
            <td>Kids Pizza for $8</td>
            <td><input type = "text" name = "kidspizzaprice" value= "<?php echo $_SESSION['prices'][8]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
        <table><form action = "updatepromotions2.php" method="POST"><br>
        <b><label>NTU Promotions 2</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
        </tr>
        <tr>
            <td>NTU Mixed Pizza</td>
            <td><input type = "text" name = "mixedpizzaprice" value= "<?php echo $_SESSION['prices'][9]; ?>"></td>
        </tr>
        <tr>
            <td>Italian Calzone Promotion</td>
            <td><input type = "text" name = "calzoneprice" value= "<?php echo $_SESSION['prices'][10]; ?>"></td>
        </tr>
        <tr>
            <td>NTU Sushi Pizza Promo</td>
            <td><input type = "text" name = "sushiprice" value= "<?php echo $_SESSION['prices'][11]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
</body> 
</html>