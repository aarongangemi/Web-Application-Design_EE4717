<?php
session_start();
function mailUser()
{
    $subject = "NTU Pizza Delivery - Order Status Notification";
    $message = "Dear ".$_SESSION['loggedinUser']['fullname']."\n".
    "We are pleased to inform you that youre order is being prepared.\n".
    "Your order will be delived to: ".$_SESSION['loggedinUser']['deliveryAddress']."\n".
    "Kind Regards,\n". 
    "The NTU Pizzeria";
    $message = wordwrap($message, 50);
    mail("aaron@gangemi.com", $subject, $message);
//Stub for php to send email, must be properly connected to mail server.
//Above is code to send email without server connection
}
function addOrderToDatabase()
{

$user = 'root';
$passwordLogin = '';
$database = "orderdatabase";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = 'INSERT INTO orders(Customer_ID,Total_Paid,Delivery_Address) VALUES ("'.$_SESSION['loggedinUser']['customerID'].'","'.$_SESSION['loggedinUser']['total'].'","'.$_SESSION['loggedinUser']['deliveryAddress'].'")';
$result = $db->query($query);
}
addOrderToDatabase();
mailUser();
header("Location: index.html");
?>