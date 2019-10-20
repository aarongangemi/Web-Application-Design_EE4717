<?php
    session_start();
    $cafeQty = $_POST['CafeQty'];
    if(isset($_POST['radioButton']))
    {
        if($_POST['radioButton'] == 2.00)
        {
            $user = 'root';
            $password = '';
            $db = 'coffeedatabase';
            $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
            $tablename = "coffeedata";
            $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Cafe au Lait (Single)' ";
            $result = $db->query($query);
            if ($result) {
               while($row = $result->fetch_assoc()) {
                  $_SESSION['cafeprice'] = $row['CoffeePrice'] * $cafeQty;
                  echo $_SESSION['cafeprice'];
                }
            }
            $db->close();
        }
        else if($_POST['radioButton'] == 3.00)
        {
            $user = 'root';
            $password = '';
            $db = 'coffeedatabase';
            $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
            $tablename = "coffeedata";
            $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Cafe au Lait (Double)' ";
            $result = $db->query($query);
            if ($result) {
               while($row = $result->fetch_assoc()) {
                  $_SESSION['cafeprice'] = $row['CoffeePrice'] * $cafeQty;
                  echo $_SESSION['cafeprice'];
                }
            }
            $db->close();
        }
    }
    header("Location: menu.php");
?>