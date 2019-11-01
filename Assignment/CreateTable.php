<?php
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = "CREATE TABLE Pizzas(
    Pizza_ID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Pizza_Name VARCHAR(256) NOT NULL,
    Pizza_Price DECIMAL(8,2) NOT NULL)";
    $result = $db->query($query);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo " Unsuccessful";
    }
?>

<?php
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = "CREATE TABLE Customers(
    Full_Name VARCHAR(256) NOT NULL,
    Customer_ID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(256) NOT NULL,
    DOB date NOT NULL,
    Address VARCHAR(100) NOT NULL)";
    $result = $db->query($query);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo " Unsuccessful";
    }
    ?>

    <?php
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = "CREATE TABLE Orders(
    Order_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Customer_ID int(8) UNSIGNED,
    Total_Paid DECIMAL(12,2) NOT NULL,
    Delivery_Address VARCHAR(100) NOT NULL,
    FOREIGN KEY (Customer_ID) REFERENCES Customers(Customer_ID))";
    $result = $db->query($query);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo " Unsuccessful";
    }
    ?>

<?php
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = "INSERT INTO Pizzas(
    Pizza_Name,Pizza_Price)
    VALUES
    ('Pepperoni Pizza', 12.00),
    ('Mushroom and Cheese', 13.00),
    ('Californian Pizza', 14.00),
    ('Margherita Pizza', 10.50),
    ('Hawaiian Pizza', 15.00),
    ('Pesto Peri Pizza', 8.00),
    ('2 Large Pizzas', 11.00),
    ('Family Feed', 16.00),
    ('Kids Pizza', 8.00),
    ('NTU Mixed Pizza Promo', 12.50),
    ('Italian Calzone Promo', 12.00),
    ('NTU Sushi Pizza Promo', 12.00);";
    $result = $db->query($query);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo " Unsuccessful";
    }
?>