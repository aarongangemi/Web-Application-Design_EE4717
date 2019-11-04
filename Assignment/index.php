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
        <?php
        include 'headerOrderNow.php';
        ?>
    </header>
    <div id = "scrolltop">
        <a href = "promotions.php"><img id = "mainBanner" src="images/PizzaBanner1.png" alt="PizzaBanner" width="1920px" height="550px"></a>
    </div>
    <div id = "scrollbottom">
    <div>
        <a href = "promotions.php"> <img id = "familybanner" src = "images/familyfeedbanner.PNG" alt = "family banner" width = "500px" height="350px"></a>
        <a href = "promotions.php"> <img id = "kidsbanner" src = "images/kidsbanner.PNG" alt = "kidsbanner" width = "500" height = "350px"></a>
        </div>
    </div>
    <?php
        include 'footer.html';
    ?>
</body> 
</html>