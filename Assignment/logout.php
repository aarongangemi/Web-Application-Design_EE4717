<?php
session_start();
if(isset($_SESSION['loggedinUser']))
{
    unset($_SESSION['loggedinUser']['customerID']);
    unset($_SESSION['loggedinUser']['fullname']);
    unset($_SESSION['loggedinUser']['email']);
    unset($_SESSION['loggedinUser']['DOB']);
    unset($_SESSION['loggedinUser']['deliveryAddress']);
    $_SESSION['loggedinUser']['isLoggedIn'] = FALSE;
}
header("Location: signUpLogin.html");
?>
