<?php
    session_start();
    if(!isset($_SESSION['cafesingletotal']))
    {
        $_SESSION['cafesingletotal'] = 0;
    }
    if(!isset($_SESSION['cafesingleqty']))
    {
        $_SESSION['cafesingleqty'] = 0;
    }
    if(!isset($_SESSION['cafedoubletotal']))
    {
        $_SESSION['cafedoubletotal'] = 0;
    }
    if(!isset($_SESSION['cafedoubleqty']))
    {
        $_SESSION['cafedoubleqty'] = 0;
    }
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
                  $_SESSION['cafesingletotal'] += $_SESSION['cafeprice'];
                  $_SESSION['cafesingleqty'] += $cafeQty;
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
                  $_SESSION['cafedoubletotal'] += $_SESSION['cafeprice'];
                  $_SESSION['cafedoubleqty'] += $cafeQty;
                }
            }
            $db->close();
        }
    }
    header("Location: menu.php");
?>