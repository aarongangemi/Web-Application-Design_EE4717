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
                <li class="navitem"><strong><a href = "index.html"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.html">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.html">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
            <div>
                 <strong><a id = "signuplabel" href="signUpLogin.html">Sign Up/Login</a></strong>
                 <a id = "ordernowlabel" href="ntuclassics.php"><img src = "images/ordernow.PNG" width = 150px height = 40px></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
    
    <table><form action = "updateNTUClassics.php" method="POST">
        <?php session_start();?>
        <b><label>NTU Classics</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
            <th>Submit</th>
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
        </tr>
        <tr>
            <td>NTU's Mixed Pizza</td>
            <td><input type = "text" name = "newmixedprice" value= "<?php echo $_SESSION['prices'][3]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
        <table><form action = "updatestudentspecials.php" method="POST"><br>
        <b><label>NTU Student Specials</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
            <th>Submit</th>
        </tr>
        <tr>
            <td>NTU's Margherita Pizza</td>
            <td><input type = "text" name = "newmargheritaprice" value= "<?php echo $_SESSION['prices'][4]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Hawaiian Pizza</td>
            <td><input type = "text" name = "newhawaiianprice" value= "<?php echo $_SESSION['prices'][5]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Pesto and Peri Chicken Pizza</td>
            <td><input type = "text" name = "newpestoperiprice" value= "<?php echo $_SESSION['prices'][6]; ?>"></td>
        </tr>
        <tr>
            <td>NTU's Vegetarian Pizza</td>
            <td><input type = "text" name = "newvegetarianprice" value= "<?php echo $_SESSION['prices'][7]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
</body> 
</html>