<?php
    $user = 'root';
    $password = '';
    $db = 'coffeedatabase';
    $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
    $tablename = "coffeedata";
    echo "Connected to database <br/>";
    $cappsingle = trim($_POST["cappnewpricesingle"]);
    $cappdouble = trim($_POST["cappnewpricedouble"]);
    if(!$cappsingle || !$cappdouble)
    {
        echo "invalid price";
        exit;
    }
    if(!get_magic_quotes_gpc())
    {
        $cappsingle = addslashes($cappsingle);
        $cappdouble = addslashes($cappdouble);
    }
    $query = "UPDATE $tablename SET CoffeePrice = $cappsingle WHERE CoffeeID = 4";
    $query1 = "UPDATE $tablename SET CoffeePrice = $cappdouble WHERE CoffeeID = 5";
    if ($db->query($query) == TRUE && $db->query($query1) == TRUE) {
        echo "Record updated successfully <br/>";
        echo "Just Iced Cappucino (Single) Coffee Price set to: ";
        echo "$cappsingle <br/>";
        echo "Just Iced Cappucino (Double) Coffee Price set to: ";
        echo "$cappdouble <br/>";
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
    $db->close();
    ?>