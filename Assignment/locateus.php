<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NTU Pizzeria - Locate Us</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="locate.css">
</head>
<body>
    <header>
    <?php
            include 'headerOrderNow.php';
            ?>
    </header>    
    <div class = "location">
            <strong><p id = "locationtext">Find us here:</p></strong>
            <img id = "locationimage" src = "images/location.PNG" alt = "Our location" width = "400px" height = "270px">
    </div>
    <div>
            <strong><label id = "hoursTitle">Opening Hours:</label></strong>
            <ul class = "hourslist">
                <li>Monday: 9.30am - 10pm</li>
                <li>Tuesday: 9.30am - 10pm</li>
                <li>Wednesday: 9.30am - 10pm</li>
                <li>Thursday: 9.30am - 10pm</li>
                <li>Friday: 9.30am - 12am</li>
                <li>Saturday: 9.30am - 12am</li>
                <li>Sunday: 9.30am - 11pm</li>
            </ul>
            <strong><label id = "hoursTitle">Delivery Hours:</label></strong>
            <ul class = "hourslist">
                <li>Monday to Thursday: 12pm - 10am</li>
                <li>Friday: 9.30 - 12am</li>
                <li>Saturday: 9.30am - 12am</li>
                <li>Sunday: 9.30am - 12am</li>
            </ul>
            <strong><label id = "addresstitle">Our Address:</label></strong>
            <p id = "addressdetails">62 Nanyang Crescent, Singapore<br>(Inside NTU Campus, across from Binjai Hall)</p>
            <strong><label id = "addresstitle">Contact Us:</label></strong>
            <p id = "contactdetails">Phone Number: 61459491711<br>
               NTU@ThePizzeria.com.au</p>
        </div>
        <?php
        include 'footer.html';
        ?>
</body> 
</html>