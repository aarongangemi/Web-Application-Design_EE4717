<html>
<body>
<?php
session_start();
$_SESSION['loggedinUser'] = array();
$fullname = trim($_POST['fullname']);
$emailAddress = trim($_POST['emailfield']);
$password = hash("sha512", $_POST['password']);
$DOB = trim($_POST['dateofBirth']);
$deliveryAddress = trim($_POST['houseNumber']." ".$_POST['streetName'].", ".$_POST['suburbName'].". ".$_POST['postcode'].", Singapore");
if(!$fullname || !$emailAddress || !$password || !$DOB || !$deliveryAddress)
{
    echo "Not all required details have been entered. <br/> Please try again";
    exit;
}
if(!get_magic_quotes_gpc())
{
    $fullname = addslashes($fullname);
    $emailAddress = addslashes($emailAddress);
    $password = addslashes($password);
    $DOB = addslashes($DOB);
    $deliveryAddress = addslashes($deliveryAddress);
}
$user = 'f35ee';
$passwordLogin = 'f35ee';
$database = "f35ee";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = 'INSERT INTO Customers(Full_Name, Email,Password, DOB, Address) VALUES ("'.$fullname.'","'.$emailAddress.'","'.$password.'","'.$DOB.'","'.$deliveryAddress.'")';
$result = $db->query($query);
$query = "SELECT Customer_ID FROM Customers WHERE Email = '$emailAddress' AND Full_Name = '$fullname' AND Password = '$password'";
$result = $db->query($query);
$row = $result->fetch_assoc();
$_SESSION['loggedinUser']['customerID'] = $row['Customer_ID'];
$_SESSION['loggedinUser']['fullname'] = $fullname;
$_SESSION['loggedinUser']['email'] = $emailAddress;
$_SESSION['loggedinUser']['DOB'] = $DOB;
$_SESSION['loggedinUser']['deliveryAddress'] = $deliveryAddress;
$_SESSION['loggedinUser']['isLoggedIn'] = TRUE;
$db->close();
header("Location: index.php");
?>
</body>
</html>