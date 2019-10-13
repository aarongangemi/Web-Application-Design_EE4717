<html>
<body>
<?php
session_start();
$_SESSION['loggedinUser'] = array();
$fullname = trim($_POST['fullname']);
$emailAddress = trim($_POST['emailfield']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
$user = 'root';
$password = '';
$database = "NTUPizzeria";
$db = new mysqli('localhost', $user, $password, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = 'INSERT INTO ntupizzeria(Full_Name, Email,Password, DOB, Address) VALUES ("'.$fullname.'","'.$emailAddress.'","'.$password.'","'.$DOB.'","'.$deliveryAddress.'")';
$result = $db->query($query);
$db->close();
$_SESSION['loggedinUser']['fullname'] = $fullname;
$_SESSION['loggedinUser']['email'] = $emailAddress;
$_SESSION['loggedinUser']['DOB'] = $DOB;
$_SESSION['loggedinUser']['deliveryAddress'] = $deliveryAddress;
$_SESSION['loggedinUser']['isLoggedIn'] = TRUE;
header("Location: index.html");
?>
</body>
</html>