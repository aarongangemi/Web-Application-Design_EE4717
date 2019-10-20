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
                    <li><a href = "menu.php" style="color: #aa7400">Products/Menu</a></li>
                    <li><a href = "admin.php" style="color: #aa7400">Price</a></li>
                    <li><a href = "sales.php" style="color: #aa7400">Sales</a></li>
                </ul>
            </nav>
        </div>
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2>
                <table border = "0">
                    <tr>
                        <th>Update Price</th>
                        <th>New Price</th>
                        <th>Submit Price</th>
                        <th>Coffee Name</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                    <form action = "updatejavaprice.php" method="POST">  
                    <td><input type = "checkbox" class="largebox" id = "javachecked" onclick="checkBox('java')"></td>    
                    <td><input type = "number" step="0.01" id = "javanewprice" name="javanewprice" min="0" value="0"></td>
                    <td><input type = "submit" value="Update Price" id = "updatejavabtn"></td>
                    </form>
                    <td><strong>Just Java</strong></td>
                    <td>Regular house blend, decaffeinated coffee, or flavor of<br>
                        the day.<br>
                        <label> 
                                <?php
                                $user = 'root';
                                $password = '';
                                $db = 'coffeedatabase';
                                $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                                $tablename = "coffeedata";
                                $query = "SELECT CoffeePrice From CoffeeData WHERE CoffeeName = 'Just Java'";
                                $result = $db->query($query);
                                if($db->query($query) == TRUE)
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "Endless Cup: " . $row["CoffeePrice"];
                                    }
                                }
                                else {
                                    echo "Error updating record: " . mysqli_error($db);
                                }
                                $db->close();
                                ?></label><br /> </td>
                    </tr>
                    <tr>
                        <form action = "updatecafeprice.php" method="POST">
                        <td><input type = "checkbox" class="largebox" id = "cafechecked" onclick="checkBox('cafe')"></td> 
                        <td><label>Single</label><input type = "number" step="0.01" id = "cafenewpricesingle" name = "cafenewpricesingle" min="0" value="0"><br><br>
                        <label>Double</label><input type="number" step="0.01" id = "cafenewpricedouble" name = "cafenewpricedouble" min="0" value="0"></td>
                        <td><input type = "submit" value = "Update Price" id = "updatecafebtn"></td>
                        </form>
                        <td><strong>Cafe au Lait</strong></td>
                        <td>House blended coffee infused into a smooth, steamed<br> milk<br>
                        <?php
                                $coffeeLabel = "Single: ";
                                $user = 'root';
                                $password = '';
                                $db = 'coffeedatabase';
                                $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                                $tablename = "coffeedata";
                                $query = "SELECT CoffeePrice From CoffeeData WHERE CoffeeName LIKE '%Cafe au Lait%'";
                                $result = $db->query($query);
                                if($db->query($query) == TRUE)
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo $coffeeLabel . $row["CoffeePrice"]."<br/>";
                                        $coffeeLabel = "Double: ";
                                    }
                                }
                                else {
                                    echo "Error updating record: " . mysqli_error($db);
                                }
                                $db->close();
                                ?>
                        </form>
                    </tr>
                    <tr>
                        <form action = "updatecappprice.php" method = "POST">
                        <td><input type = "checkbox" class="largebox" id = "cappchecked" onclick="checkBox('capp')"></td> 
                        <td><label>Single</label><input type = "number" step="0.01" id = "cappnewpricesingle" name = "cappnewpricesingle" min="0" value="0"><br><br>
                        <label>Double</label><input type = "number" step = "0.01" id = "cappnewpricedouble" name = "cappnewpricedouble" min = "0" value="0"></td>
                        <td><input type = "submit" value="Update Price" id = "updatecappbtn"></td>
                            </form>
                        <td><strong>Iced Cappucino</strong></td>
                        <td>Sweetened espresso blended with icy-cold milk and<br>
                             served in a chilled glass<br>
     
                        <?php
                                $coffeeLabel = "Single: ";
                                $user = 'root';
                                $password = '';
                                $db = 'coffeedatabase';
                                $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
                                $tablename = "coffeedata";
                                $query = "SELECT CoffeePrice From CoffeeData WHERE CoffeeName LIKE '%Iced Cappucino%'";
                                $result = $db->query($query);
                                if($db->query($query) == TRUE)
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo $coffeeLabel . $row["CoffeePrice"]."<br/>";
                                        $coffeeLabel = "Double: ";
                                    }
                                }
                                else {
                                    echo "Error updating record: " . mysqli_error($db);
                                }
                                $db->close();
                                ?>
                        </form>        
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer><p>Copyright &copy; 2019 JavaJam Coffee House<br>
        <a href="mailto:aaron@gangemi.com">aaron@gangemi.com</a>
    </p></footer>
</body>