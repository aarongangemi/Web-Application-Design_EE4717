<?php
    session_start();
    if(!isset($_SESSION['javatotal']))
    {
        $_SESSION['javatotal'] = 0;
    }
    if(!isset($_SESSION['javaQty']))
    {
        $_SESSION['javaQty'] = 0;
    }
    $javaQty = $_POST['javaqty'];
    $user = 'root';
    $password = '';
    $db = 'coffeedatabase';
    $db = new mysqli('localhost',$user,$password,$db) or die("Unable to connect to database");
    $tablename = "coffeedata";
    $query = "SELECT CoffeePrice FROM $tablename WHERE CoffeeName = 'Just Java' ";
    $result = $db->query($query);
    if ($result) {
       while($row = $result->fetch_assoc()) {
          $_SESSION['javaprice'] = $row['CoffeePrice'] * $javaQty;
          echo $_SESSION['javaprice'];
          $_SESSION['javatotal'] += $_SESSION['javaprice'];
          $_SESSION['javaQty'] += $javaQty;
        }
    }
    $db->close();
    header("Location: menu.php");
?>