<?php
    $user = 'root';
    $password = '';
    $db = 'coffeedatabase';
    $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
    $tablename = "coffeedata";
    echo "Connected to database <br/>";
    $javaprice = $_POST["javanewprice"];
    $query = "UPDATE $tablename SET CoffeePrice = $javaprice WHERE CoffeeID = 1";
    if ($db->query($query) == TRUE) {
        echo "Record updated successfully <br/>";
        echo "Just Java Coffee Price set to: ";
        echo "$javaprice <br/>";
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
    $db->close();
?>