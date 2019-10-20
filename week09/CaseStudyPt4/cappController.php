<?php
    session_start();
    if(!isset($_SESSION['cappsingletotal']))
    {
        $_SESSION['cappsingletotal'] = 0;
    }
    if(!isset($_SESSION['cappsingleqty']))
    {
        $_SESSION['cappsingleqty'] = 0;
    }
    if(!isset($_SESSION['cappdoubletotal']))
    {
        $_SESSION['cappdoubletotal'] = 0;
    }
    if(!isset($_SESSION['cappdoubleqty']))
    {
        $_SESSION['cappdoubleqty'] = 0;
    }
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
                  $_SESSION['cappsingletotal'] += $_SESSION['cappprice'];
                  $_SESSION['cappsingleqty'] += $cappQty;
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
                  $_SESSION['cappdoubletotal'] += $_SESSION['cappprice'];
                  $_SESSION['cappdoubleqty'] += $cappQty;
                }
            }
            $db->close();
        }
    }
    header("Location: menu.php");
?>