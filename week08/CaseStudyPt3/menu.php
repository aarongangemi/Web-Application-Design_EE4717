<!DOCTYPE html>
<html lang="en">
<head>
<title>Lighthouse Island Bistro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="menuCSS.css">
</head>
<body>
    <script type = "text/javascript" src = menuScript.js></script>
    <div id="wrapper">
        <header>
            <h1><img src="text.PNG" width = 750 height = 100 alt = "JavaJam Coffee House" class = center> </h1>
        </header>   
        <div id ="leftcolumn">
            <nav>
                <ul id="sitelist">
                    <li><a href="index.html" style="color: #aa7400">Home</a></li>
                    <li><a href="menu.html"style="color: #aa7400">Menu</a></li>
                    <li><a href="music.html"style="color: #aa7400">Music</a></li>
                    <li><a href="jobs.html"style="color: #aa7400">Jobs</a></li>
                    <li><a href="admin.php"style="color: #aa7400">Admin</a></li>
                </ul>
            </nav>
        </div>
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2>
                <table border = "0">
                    <tr>
                        <th>Coffee Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Submit</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                    <td><strong>Just Java</strong></td>
                    <td>Regular house blend, decaffeinated coffee, or flavor of<br>
                        the day.<br>
                    <form method = "POST" action = "javaController.php">   
                        <input type = "radio"  name = "radioButton" value = "2.00"/>
                            <?php
                            session_start();
                             $user = 'root';
                             $password = '';
                             $db = 'coffeedatabase';
                             $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                             $tablename = "coffeedata";
                             $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Just Java' ";
                             $result = $db->query($query);
                             if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Endless Cup ".$row['CoffeePrice'];
                                }
                            }
                             $db->close();
                            ?>
                    <br /></td>
                    <td><input type="text" name = "javaqty" size="2" value="0"></td>
                    <td><input type="Submit"></td>
                    </form>
                    <td><label><?php if(!isset($_SESSION['javaprice'])){echo 0;}else{echo "$".$_SESSION['javaprice'];}?></label></td>
                    </tr>
                    <tr>
                        <form method = "POST" action = "CafeController.php">
                        <td><strong>Cafe au Lait</strong></td>
                        <td>House blended coffee infused into a smooth, steamed<br> milk<br> 
                        <label> <input type = "radio"  name = "radioButton" value = "2.00"/>
                        <?php
                             $user = 'root';
                             $password = '';
                             $db = 'coffeedatabase';
                             $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                             $tablename = "coffeedata";
                             $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Cafe au Lait (Single)' ";
                             $result = $db->query($query);
                             if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Single ".$row['CoffeePrice'];
                                }
                            }
                             $db->close();
                            ?></label><br />
                        <label> <input type = "radio"  name = "radioButton" value = "3.00"/>
                        <?php
                        $user = 'root';
                             $password = '';
                             $db = 'coffeedatabase';
                             $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                             $tablename = "coffeedata";
                             $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Cafe au Lait (Double)' ";
                             $result = $db->query($query);
                             if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Double ".$row['CoffeePrice'];
                                }
                            }
                             $db->close();
                            ?></label><br /></td>    
                        <td><input type="text" name = "CafeQty" size="2" value="0"></td>
                        <td><input type="Submit"></td>
                        </form>
                        <td><label><?php if(!isset($_SESSION['cafeprice'])){echo 0;}else{echo "$".$_SESSION['cafeprice'];}?></label></td>
                    </tr>
                    <tr>
                        <form method = "POST" action = "cappController.php">
                        <td><strong>Iced Cappucino</strong></td>
                        <td>Sweetened espresso blended with icy-cold milk and<br>
                             served in a chilled glass<br>    
                             <label> <input type = "radio"  name = "radioButton" value = "4.75"/>
                             <?php
                             $user = 'root';
                             $password = '';
                             $db = 'coffeedatabase';
                             $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                             $tablename = "coffeedata";
                             $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Iced Cappucino (Single)' ";
                             $result = $db->query($query);
                             if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Single ".$row['CoffeePrice'];
                                }
                            }
                             $db->close();
                            ?> </label><br />
                                <label> <input type = "radio"  name = "radioButton" value = "5.75"/>
                                <?php
                            $user = 'root';
                             $password = '';
                             $db = 'coffeedatabase';
                             $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                             $tablename = "coffeedata";
                             $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Iced Cappucino (Double)' ";
                             $result = $db->query($query);
                             if ($result) {
                                while($row = $result->fetch_assoc()) {
                                    echo "Double ".$row['CoffeePrice'];
                                }
                            }
                             $db->close();
                            ?></label><br /></td>
                        <td><input type="text" name = "CappQty" size="2" value="0"></td>
                        <td><input type = "submit"></td>
                        </form>
                        <td><label><?php if(!isset($_SESSION['cappprice'])){echo 0;}else{echo "$".$_SESSION['cappprice'];}?></label>
                    </tr>
                </table>
                <label id = "floatcost"><?php $total = $_SESSION['javaprice'] + $_SESSION['cafeprice'] + $_SESSION['cappprice']; echo "Total Cost: ".$total;?></label>
            </div>
        </div>
    </div>
    <footer><p>Copyright &copy; 2019 JavaJam Coffee House<br>
        <a href="mailto:aaron@gangemi.com">aaron@gangemi.com</a>
    </p></footer>
</body>