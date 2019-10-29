<?php
session_start();
if(isset($_SESSION['loggedinUser']))
{
    unset($_SESSION['loggedinUser']['customerID']);
    unset($_SESSION['loggedinUser']['fullname']);
    unset($_SESSION['loggedinUser']['email']);
    unset($_SESSION['loggedinUser']['DOB']);
    unset($_SESSION['loggedinUser']['deliveryAddress']);
    unset($_SESSION['loggedinUser']['isLoggedIn']);
    unset($_SESSION['loggedinUser']);
}
header("Location: signUpLogin.php");
?>
