<?php
    session_start();
    $cappQty = $_POST['CappQty'];
    if(isset($_POST['radioButton']))
    {
        if($_POST['radioButton'] == 4.75)
        {
            $user = 'root';
            $password = '';
            $db = 'coffeedatabase';
            $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
            $tablename = "coffeedata";
            $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Iced Cappucino (Single)' ";
            $result = $db->query($query);
            if ($result) {
               while($row = $result->fetch_assoc()) {
                  $_SESSION['cappprice'] = $row['CoffeePrice'] * $cappQty;
                  echo $_SESSION['cappprice'];
                }
            }
            $db->close();
        }
        else if($_POST['radioButton'] == 5.75)
        {
            $user = 'root';
            $password = '';
            $db = 'coffeedatabase';
            $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
            $tablename = "coffeedata";
            $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Iced Cappucino (Double)' ";
            $result = $db->query($query);
            if ($result) {
               while($row = $result->fetch_assoc()) {
                  $_SESSION['cappprice'] = $row['CoffeePrice'] * $cappQty;
                  echo $_SESSION['cappprice'];
                }
            }
            $db->close();
        }
    }
    header("Location: menu.php");
?>