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
                </ul>
            </nav>
        </div>
        <div id="rightcolumn">
            <div class="content">
                <h2>Coffee at JavaJam</h2><br><br>
                <label>Total Dollar Sales by product</label><br><br>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Sales($)</th>
                    </tr>
                    <tr><td>Just Java</td>
                    <td><?php session_start(); if(!isset($_SESSION['javatotal'])){echo 0;}else{echo "$".$_SESSION['javatotal'];}?></td></tr>
                    <tr><td>Cafe au Lait (Single)</td>
                    <td><?php if(!isset($_SESSION['cafesingletotal'])){echo 0;}else{echo "$".$_SESSION['cafesingletotal'];}?></td></tr>
                    <tr><td>Cafe au Lait (Double)</td>
                    <td><?php if(!isset($_SESSION['cafedoubletotal'])){echo 0;}else{echo "$".$_SESSION['cafedoubletotal'];}?></td></tr>
                    <tr><td>Iced Cappucino (Single)</td>
                    <td><?php if(!isset($_SESSION['cappsingletotal'])){echo 0;}else{echo "$".$_SESSION['cappsingletotal'];}?></td></tr>
                    <tr><td>Iced Cappucino (Double)</td>
                    <td><?php if(!isset($_SESSION['cappdoubletotal'])){echo 0;}else{echo "$".$_SESSION['cappdoubletotal'];}?></td></tr>
                </table>
                <label>Sales Quantities by Product Categories</label>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Quantities</th>
                    </tr>
                    <tr><td>Just Java</td>
                    <td><?php if(!isset($_SESSION['javaQty'])){echo 0;}else{echo $_SESSION['javaQty'];}?></td></tr>
                    <tr><td>Cafe au Lait (Single)</td>
                    <td><?php if(!isset($_SESSION['cafesingleqty'])){echo 0;}else{echo $_SESSION['cafesingleqty'];}?></td></tr>
                    <tr><td>Cafe au Lait (Double)</td>
                    <td><?php if(!isset($_SESSION['cafedoubleqty'])){echo 0;}else{echo $_SESSION['cafedoubleqty'];}?></td></tr>
                    <tr><td>Iced Cappucino (Single)</td>
                    <td><?php if(!isset($_SESSION['cappsingleqty'])){echo 0;}else{echo $_SESSION['cappsingleqty'];}?></td></tr>
                    <tr><td>Iced Cappucino (Double)</td>
                    <td><?php if(!isset($_SESSION['cappdoubleqty'])){echo 0;}else{echo $_SESSION['cappdoubleqty'];}?></td></tr>
                </table>
                <label>Report</label><br>
                    <?php
                      if(!isset($_SESSION['javatotal'])){$_SESSION['javatotal'] = 0;}
                      if(!isset($_SESSION['cafesingletotal'])){$_SESSION['cafesingletotal'] = 0;}
                      if(!isset($_SESSION['cafedoubletotal'])){$_SESSION['cafedoubletotal'] = 0;}
                      if(!isset($_SESSION['cappsingletotal'])){$_SESSION['cappsingletotal'] = 0;}
                      if(!isset($_SESSION['cappdoubletotal'])){$_SESSION['cappdoubletotal'] = 0;}
                    $_SESSION['sortingArray'] = array("Just Java" => $_SESSION['javatotal'],
                    "Cafe au Lait (Single)" => $_SESSION['cafesingletotal'], "Cafe au Lait (Double)" => $_SESSION['cafedoubletotal'],
                    "Iced Cappucino (Single)" => $_SESSION['cappsingletotal'],"Iced Cappucino (Double)" => $_SESSION['cappdoubletotal']);
                    foreach ($_SESSION['sortingArray'] as $key => $value) {
                        if($value == max($_SESSION['sortingArray']))
                        {
                            echo "The product with the most sales was ".$key." which made $".$value;
                            break;
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
    <footer><p>Copyright &copy; 2019 JavaJam Coffee House<br>
        <a href="mailto:aaron@gangemi.com">aaron@gangemi.com</a>
    </p></footer>
</body>
</html>