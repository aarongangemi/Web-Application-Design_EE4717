<?php
$pepperoniPrice = trim($_POST['newpepperoniprice']);
$mushcheesePrice = trim($_POST['newmushcheeseprice']);
$californianPrice = trim($_POST['newcalifornianprice']);
$mixedPrice = trim($_POST['newmixedprice']); 
$user = 'root';
$passwordLogin = '';
$database = "ntupizzeria";
$db = new mysqli('localhost', $user, $passwordLogin, $database);
if(mysqli_connect_errno())
{
    echo "Error: Could not connect to database, please try again later";
}
if(!get_magic_quotes_gpc())
{
    $pepperoniPrice = addslashes($pepperoniPrice);
    $mushcheesePrice = addslashes($mushcheesePrice);
    
}
//TODO: Up to here, need to set value of input text box so value is not null - will require database to store pizza price.
//TODO: Then need to implement Update function 