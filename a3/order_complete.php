<?php
require_once("tools.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Order Successful</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Complete</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat|Slabo+27px|" rel="stylesheet">
    
</head>


<span class="error">*
    <?php echo $_SESSION['cust']['expiry'];?></span>
<span class="error">*
    <?php echo $_POST['cust']['expiry'];?></span>




<?php 
      
 
if (count($_SESSION) ==0)
    {
    header("Location: index.php");
    exit();
    }
else{
      echo "this is nice";
      echo $_SESSION['cust']['name'];
      echo $_SESSION['cust']['email'];
      echo $_SESSION['cust']['mobile'];
      echo $_SESSION['cust']['card'];
      echo $_SESSION['cust']['expiry'];
      
      }
    
      
      ?>
    <h1>Your order has been received - ss Thanks</h1>
    
    <p class="session_message">Booking Name: <?php echo $_SESSION['cust']['name'];?></p>
    <p class="session_message">Booking Email: <?php echo $_SESSION['cust']['email'];?></p>
    <p class="session_message">Mobile: <?php echo $_SESSION['cust']['mobile'];?></p>
    <p class="session_message">Credit Card: <?php echo $_SESSION['cust']['card'];?></p>
    <p class="session_message">Expiry Date: <?php echo $_SESSION['cust']['expiry'];?></p>
    



<body>
  

</body>

</html>