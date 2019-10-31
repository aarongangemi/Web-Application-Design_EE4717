<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Student Specials</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="menucss.css">
<link rel="stylesheet" href="studentspecialsCSS.css">
<script type="text/javascript" src="menucart.js"></script>
</head>
<body>
    <?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user = 'f35ee';
    $passwordLogin = 'f35ee';
    $database = "f35ee";
    $db = new mysqli('localhost', $user, $passwordLogin, $database);
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to database, please try again later";
    }
    $query = "SELECT Pizza_price FROM Pizzas";
    $result = $db->query($query);
    if ($result) {
    for($i = 0; $i < $result->num_rows; $i++)
    {
        $row = $result->fetch_assoc();
        $_SESSION['prices'][$i] = $row['Pizza_price'];
    }
    }
    $db->close();
    ?>
    <header>
            <?php
                include 'menuheader.php';
            ?>
            <div class = "container">
                    <nav>
                    <ul class = "menunavigationbar">
                        <li class="menunavitem"><strong><a id = "ntuclassicstitle" href = "ntuclassics.php">NTU Classics</a></strong></li>
                        <li class="menunavitem"><strong><a id = "studentspecialstitle" href = "studentspecials.php">Student Specials</a></strong></li>
                    </ul>
                    </nav>
                </div>
    </header>
    <div class="row">
        <div class = "column">
        <strong><em><label id = "pizzatitle" >NTU's Margherita Pizza</label></em></strong>
        <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/margheritapizza.png" alt = "Pepperoni pizza image" width = "200" height="200">
        <br>NTU's famous Margherita pizza<br> is our cheesiest pizza.
          A cheesy<br> delight filled and topped with<br> tomatoes and to add
           extra flavour,<br> sprikled with basil. Be sure to try<br> this cheesy sensation.
         Be sure to <br>come and get one now!!!<br><br>
         <label id = "price"><?php echo "Price = ".$_SESSION['prices'][3];?></label><br><br>
         <label id = "price">Qty: </label><input id = "margqtytextbox" class="qty" type = "number" min="0" name = "margheritaQty" id = "margheritaQty"><br> 
            <img id = "image" class = "addicon" id = "add1" src = "images/addicon.png" alt = "add icon here" width = "60px" height="50px" onclick="addMargheritaToCart()"><br> 
            </p></strong>
            </div>
        </div>    
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Hawaiian Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/hawaiianpizza.png" alt = "Pepperoni pizza image" width = "220" height="200">
            <br>Ham and Cheese not enough?<br> Why not add Pineapple? 
            This pizza<br> is covered with fresh thick-cut ham,<br> warm cheese and our famous crunchy<br> pineapple. 
            Enjoy a fresh woodfired<br> base and that delicious crunch.<br> Be sure to come and get one now!!!<br><br>
            <label id = "price"><?php echo "Price = ".$_SESSION['prices'][4];?></label><br><br>
            <label id = "price">Qty: </label><input id = "hawqtytextbox" type = "number" min="0" name = "hawaiianQty" class="qty" id = "hawaiianQty"><br> 
                <img class = "addicon" src = "images/addicon.png" id = "add2" alt = "add icon here" width = "60px" height="50px" onclick="addHawaiianToCart()"><br> 
                </p></strong>
                </div>
            </div>   
        <div class="row">
                <div class = "column">
            <strong><em><label id = "pizzatitle" >NTU's Pesto Peri Chicken Pizza</label></em></strong>
            <strong><p id = "pepperoniPizzaText"><img id = "pepperoniPizza" src = "images/pestoperichickenpizza.png" alt = "Pepperoni pizza image" width = "200" height="200">
            <br>NTU's Pesto Peri Chicken pizza<br> is a one of a kind.
             A base with<br> napoletana sauce replaced with<br> our divine pesto sauce.
             A mouth-<br>watering pizza, smothered with<br> chicken, ham, capsicum and olives.<br> 
             Be sure to come and get one now!!!<br><br>
             <label id = "price"><?php echo "Price = ".$_SESSION['prices'][5];?></label><br><br>
             <label id = "price">Qty: </label></strong><input id = "pestoqtytextbox" type = "number" min="0" name = "pestoQty" class="qty" id = "pestoQty"></form><br> 
                <img id = "image" class = "addicon" id = "add3" src = "images/addicon.png" alt = "add icon here" width = "60px" height="50px" onclick = "addPestoToCart()">
                </p>
                </div>
            </div> 
            <div class = "row">
            <div class = "column">
                    <b><p id = "tablelabel">Items Added:</p></b><br>
                    <table id = "cartTable">
                        <tr>
                            <th>Cart Item</th>
                            <th>Quantity</th>
                        </tr>
                    </table>
            </div>
        </div>  
        <?php
                    if(!isset($_SESSION['alertUser']))
                    {
                        $_SESSION['alertUser'] = false;
                    }
            if($_SESSION['alertUser'] == true)
            {
                echo "<script type='text/javascript'>
                alert('Cart must be more than 0, Please go back');
                </script>";
                $_SESSION['alertUser'] = false;
            }
        ?>
</body>
</html>