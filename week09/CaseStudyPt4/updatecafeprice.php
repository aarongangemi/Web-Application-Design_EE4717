<?php
    $user = 'root';
    $password = '';
    $db = 'coffeedatabase';
    $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
    $tablename = "coffeedata";
    echo "Connected to database <br/>";
    $cafesingle = trim($_POST["cafenewpricesingle"]);
    $cafedouble = trim($_POST["cafenewpricedouble"]);
    if(!$cafesingle || !$cafedouble)
    {
        echo "invalid price";
        exit;
    }
    if(!get_magic_quotes_gpc())
    {
        $cafesingle = addslashes($cafesingle);
        $cafedouble = addslashes($cafedouble);
    }
    $query = "UPDATE $tablename SET CoffeePrice = $cafesingle WHERE CoffeeID = 2";
    $query1 = "UPDATE $tablename SET CoffeePrice = $cafedouble WHERE CoffeeID = 3";
    if ($db->query($query) == TRUE && $db->query($query1) == TRUE) {
        echo "Record updated successfully <br/>";
        echo "Just Cafe au Lait (Single) Coffee Price set to: ";
        echo "$cafesingle <br/>";
        echo "Just Cafe au Lait (Double) Coffee Price set to: ";
        echo "$cafedouble <br/>";
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
    $db->close();
    ?>