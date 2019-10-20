<?php
    session_start();
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
        }
    }
    $db->close();
    header("Location: menu.php");
?>