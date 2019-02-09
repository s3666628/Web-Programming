<?php
require_once("tools.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Order Successful</title>
</head>
    
<php? echo $_POST["cust"]["name"];?>
<php?     
if($_POST)
{

echo 'movie id: ' . htmlspecialchars($_POST["movie"]["id"])." ";
echo 'movie day: ' . htmlspecialchars($_POST["movie"]["day"])." ";
echo 'movie hour: ' . htmlspecialchars($_POST["movie"]["hour"])." ";
    
echo 'seats STA: ' . htmlspecialchars($_POST["seats"]["STA"])." ";
echo 'seats STP: ' . htmlspecialchars($_POST["seats"]["STP"])." ";
echo 'seats STC: ' . htmlspecialchars($_POST["seats"]["STC"])." ";
    
echo 'seats FCA: ' . htmlspecialchars($_POST["seats"]["FCA"])." ";
echo 'seats FCP: ' . htmlspecialchars($_POST["seats"]["FCP"])." ";
echo 'seats FCC: ' . htmlspecialchars($_POST["seats"]["FCC"])." ";
    
echo 'name : ' . htmlspecialchars($_POST["cust"]["name"])." ";
echo 'email : ' . htmlspecialchars($_POST["cust"]["email"])." ";
echo 'mobile : ' . htmlspecialchars($_POST["cust"]["mobile"])." ";
echo 'card : ' . htmlspecialchars($_POST["cust"]["card"])." ";
echo 'expiry : ' . htmlspecialchars($_POST["cust"]["expiry"])." ";
echo 'total : ' . htmlspecialchars($_POST["total"])." ";    
}    
      ?>
    

<body>
<h1>Your order has been received - ss Thanks</h1>

</body>

</html> 