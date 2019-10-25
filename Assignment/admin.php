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
                <li class="navitem"><strong><a href = "index.php"><img src = "images/homeIcon.PNG" width = "23px" height="20px"></a></strong></li>
                <li class="navitem"><strong><a href = "ntuclassics.php">Menu</a></strong></li>
                <li class="navitem"><strong><a href = "promotions.php">Promotions</a></strong></li>
                <li class="navitem"><strong><a href = "locateus.html">Locate Us</a></strong></li>
                <li><strong><a href = "review.html">Review</a></strong></li>
            </ul>
            <div>
                 <strong><a id = "signuplabel" href="signUpLogin.html"><?php if(!isset($_SESSION)){session_start();}if(!isset($_SESSION['loggedinUser']['fullname'])){echo "Sign Up/Login";}else{echo "Welcome: ".$_SESSION['loggedinUser']['fullname'];}?></a></strong>
                 <a id = "ordernowlabel" href="ntuclassics.php"><img src = "images/ordernow.PNG" width = 150px height = 40px></a>
            </div>
            <div>
               <img class = "companyLogo" src = "images/logo.PNG" alt = "NTU Pizzeria" width = "100px" height="10px">
            </div>
    </header>
    <?php
    if(!isset($_SESSION['prices']))
        session_start();
        $user = 'root';
        $passwordLogin = '';
        $database = "pizzadatabase";
        $db = new mysqli('localhost', $user, $passwordLogin, $database);
        if(mysqli_connect_errno())
        {
            echo "Error: Could not connect to database, please try again later";
        }
        $Query = "SELECT Pizza_price FROM pizzas";
        $result = $db->query($Query);
        if ($result) {
        for($i = 0; $i < $result->num_rows; $i++)
        {
            $row = $result->fetch_assoc();
            $_SESSION['prices'][$i] = $row['Pizza_price'];
        }
        }
        $db->close();
    
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
        </form>
        <table><form action = "updatePromotions.php" method="POST"><br>
        <b><label>NTU Promotions</label></b>
        <tr>
            <th>Pizza Name</th>
            <th>New Price</th>
        </tr>
        <tr>
            <td>2 Large Pizza's for $20</td>
            <td><input type = "text" name = "2largepizzasprice" value= "<?php echo $_SESSION['prices'][8]; ?>"></td>
        </tr>
        <tr>
            <td>Feed the Family for $15</td>
            <td><input type = "text" name = "familyfeedprice" value= "<?php echo $_SESSION['prices'][9]; ?>"></td>
        </tr>
        <tr>
            <td>Kids Pizza for $8</td>
            <td><input type = "text" name = "kidspizzaprice" value= "<?php echo $_SESSION['prices'][10]; ?>"></td>
            <td><input type = "submit"></td>
        </tr>
        </form>
</body> 
</html>