<?php
session_start();
$emailAddress = trim($_POST['emailfieldLogin']);
$password = hash("sha512", $_POST['passwordLogin']);
if(!$emailAddress || !$password)
{
    echo "Not all required details have been entered. <br/> Please try again";
    exit;
}
if(!get_magic_quotes_gpc())
{
    $emailAddress = addslashes($emailAddress);
    $password = addslashes($password);
}
$user = 'root';
$passwordLogin = '';
$database = "NTUPizzeria";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
$query = "SELECT Customer_ID, Full_Name, Email, DOB, Address FROM ntupizzeria WHERE Email = '$emailAddress' AND Password = '$password'";
$result = $db->query($query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $_SESSION['loggedinUser']['customerID'] = $row['Customer_ID'];
        $_SESSION['loggedinUser']['fullname'] = $row['Full_Name'];
        $_SESSION['loggedinUser']['email'] = $row['Email'];
        $_SESSION['loggedinUser']['DOB'] = $row['DOB'];
        $_SESSION['loggedinUser']['deliveryAddress'] = $row['Address'];
        $_SESSION['loggedinUser']['isLoggedIn'] = TRUE;
        break; //Ensures only produces 1 result
    }
    header("Location: index.php");
}
else
{
    header("Location: signUpLogin.html");
}
$db->close();
?>
