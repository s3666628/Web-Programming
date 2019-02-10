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
<?php
 
 
if (count($_SESSION) ==0)
    {
    header("Location: index.php");
    exit();
    }
//else{
//      echo "this is nice";
//      echo $_SESSION['cust']['name'];
//      echo "<br>";
//      echo $_SESSION['cust']['email'];
//      echo "<br>";
//      echo $_SESSION['cust']['mobile'];
//      echo "<br>";
//      echo $_SESSION['cust']['card'];
//      echo "<br>";
//      echo $_SESSION['cust']['expiry'];
//      echo "<br>";  
//    
//    
//      echo $_SESSION['movie']['name'];
//      echo "<br>";
//      echo $_SESSION['movie']['id'];
//      echo "<br>";
//      echo $_SESSION['movie']['day'];
//      echo "<br>";
//      echo $_SESSION['movie']['hour'];
//
//
//      echo $_SESSION['seats']['STA'];
//      echo "<br>";
//      echo $_SESSION['seats']['STC'];
//      echo "<br>";
//      echo $_SESSION['seats']['STC'];
//      echo "<br>";
//      echo $_SESSION['seats']['FCA'];
//      echo "<br>";
//      echo $_SESSION['seats']['FCP'];   
//      echo "<br>";
//      echo $_SESSION['seats']['FCC']; 
//      
//      echo "<br>";
//      echo $_SESSION['total']; 
//      
//      }
    
$movie_names = [
  "AHF" => "Boy Erased",
  "ACT" => "The Girl in the Spider's Web",
  "RMC" => "A Star is Born",
  "ANM" => "Ralph Breaks the Internet"
];

$movie_tile ="";
    
foreach ($movie_names as $key => $value) {
//    echo  "Element" . $key."<br>";
    if ($key == $_SESSION['movie']['id']){
        $movie_tile = $value;
    }
    
 
}     
    
    $mov_id = $_SESSION['movie']['id'];
    $mov_day = $_SESSION['movie']['day'];
    $mov_hour = $_SESSION['movie']['hour'];
    $cust_name = $_SESSION['cust']['name'];
    $cust_email = $_SESSION['cust']['email'];
    $cust_mobile = $_SESSION['cust']['mobile'];
    $cust_card = $_SESSION['cust']['card'];
    $cust_expiry = $_SESSION['cust']['expiry'];
    
    $new_card = (strlen($cust_card)>4)?substr($cust_card, -4):$cust_card;
    
    $seat1 = $_SESSION['seats']['STA'];
    $seat2 = $_SESSION['seats']['STC'];
    $seat3 = $_SESSION['seats']['STP'];
    $seat4 = $_SESSION['seats']['FCA'];
    $seat5 = $_SESSION['seats']['FCP'];
    $seat6 = $_SESSION['seats']['FCC'];
    
    $total = $_SESSION['total'];
    $gst = $total / 11;
    $gst = sprintf ("% 01.2f", $gst);
    $date_today = date("Y-m-d");

    
    $list = array
( 
$date_today.",",        
$cust_name.",",
$cust_email.",",
$cust_mobile.",",
$mov_id.",",
$mov_day.",",        
$mov_hour.",",
$seat1.",",
$seat2.",",
$seat3.",",
$seat4.",",
$seat5.",",
$seat6.",",
$total.",",    
        
);

$file = fopen("test_bookings.txt","a");
flock($file, LOCK_SH);    
fwrite("/n");
foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }
fwrite("/n");
fwrite("/n");    
flock($fp, LOCK_UN);
fclose($file);
    
    
      ?>
    
        <header>


        <div>

            <h1 id="top">The Lunardo Cinema</h1>
            <h2 id="tagline">The real cinema experience, since 1922</h2>
        </div>
    </header>
    <h2>Thank You - Your Booking has been Processed</h2>
    <p>The Lunardo Cinema: ABN number: 00 123 456 789 </p>
    


    <h3 class="session_message">Your Movie Booking is for: <?php echo $movie_tile;?></h3>
    <h4>Booking Details Comfirmation</h4>
<!--    <p class="session_message">Movie ID: <?php echo $_SESSION['movie']['id'];?></p>-->
    
    <ul>
    <li>Movie Day and Time: <?php echo $mov_day. "at " . $mov_hour;?></li>
    <li>Booking Name: <?php echo $cust_name;?></li>
    <li>Booking Email: <?php echo $cust_email;?></li>
    <li>Your Mobile Number: <?php echo $cust_mobile;?></li>
    <li>Your Card Number Ends with: <?php echo $new_card;?></li>

    </ul>
    
    
<!--    <p class="session_message">Movie Day and Time: <?php echo $mov_day. "at " . $mov_hour;?></p>-->

<!--
    <p class="session_message">Booking Name: <?php echo $cust_name;?></p>
    <p class="session_message">Booking Email: <?php echo $cust_email;?></p>
    <p class="session_message">Mobile: <?php echo $cust_mobile;?></p>
    <p class="session_message">Credit Card: <?php echo $cust_card;?></p>
    <p class="session_message">Expiry Date: <?php echo $cust_expiry;?></p>
-->
    <h4>Seat Details</h4>
    

<!--
    <ul>
    <li>Num - Standard Adult Seats: <?php echo $seat1;?></li>
    <li>Num - Standard Concessions Seats: <?php echo $seat2;?></li>
    <li>Num - Standard Child Seats: <?php echo $seat3;?></li>
    <li>Num - First Class Adult Seats: <?php echo $seat4;?></li>
    <li>Num - First Clas Concessions Seats: <?php echo $seat5;?></li>
    <li>Num - First Clas Child Seats: <?php echo $seat6;?></li>     

    </ul>
-->
    
    <table style="width:30%">

                <tr>
                    <th>Seat Type</th>
                    <th>Number of Seats Booked</th>
                </tr>
                <tr>
                    <th>Standard Adult</th>
                    <td style=" text-align: center"><?php echo $seat1;?></td>


                </tr>
                <tr>
                    <th>Standard Concession</th>
                     <td style=" text-align: center"><?php echo $seat2;?></td>
   

                </tr>
                <tr>
                    <th>Standard Child</th>
                     <td style=" text-align: center"><?php echo $seat3;?></td>
      

                </tr>
                <tr>
                    <th>First Class Adult</th>
                     <td style=" text-align: center"><?php echo $seat4;?></td>


                </tr>
                <tr>
                    <th>First Class Concession</th>
                     <td style=" text-align: center"><?php echo $seat5;?></td>


                </tr>
                <tr>
                    <th>First Class Child</th>
                     <td style=" text-align: center"><?php echo $seat6;?></td>

                </tr>
            </table>

    
    <p class="session_message">Total Price: <?php echo "$ " .$total ." GST Included = "."$ ".$gst;?></p>  
    

    



<body>
  

</body>

</html>