<?php
  session_start();

//unset ($_SESSION['cust'], $_SESSION['movie'], $_SESSION['seats']); 
//
//$errorsFound = 0;
//$emailError = '';
//$email = $_POST['cust']['email'];
//$nameError = '';
//$name = $_POST['cust']['name'];
//
//
//if (empty ($email))
//{
//    $emailError = '<span style = "color:red">      Enter a valid email address</span>';
//    $errorsFound++;
//    echo $errorsFound;
//}

if($_POST)
{
echo htmlspecialchars($_POST["movie"]["name"]);
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

if($_POST)
{

    $errors = array();
    echo "test count post =";
    echo count($_POST); 
    // check name
    if(strlen($_POST["cust"]["name"]) < 2)
   {
       $errors["name1"] = "You must enter a name longer than one character";
       echo $errors["name1"];
   }
//    echo count($errors)."errors count"; 
    if(empty($errors["name1"])) echo $errors["name1"];
    {
        $errors["name2"] = "You must enter a name in the name field";
    }

    // check email
    if(strlen($_POST["cust"]["email"]) < 2)
   {
       $errors["email1"] = "You must enter a proper email address";
        echo $errors["email1"];
   }
//    echo count($errors)."errors count"; 
    if(empty($errors["email2"])) echo $errors["email2"];
    {
        $errors["email2"] = "email address cannot be empty";
    }
    
    
    // check mobile
    
    if(strlen($_POST["cust"]["mobile"]) < 2)
   {
       $errors["mobile1"] = "mobile number is invalid";
        echo $errors["mobile1"];
   }
//    echo count($errors)."errors count"; 
    
    if(empty($errors["mobile2"])) 
        echo $errors["mobile2"];
    {
        $errors["mobile2"] = "mobile number cannot be empty";
    }
    
    // check card
        if(strlen($_POST["cust"]["card"]) < 2)
   {
       $errors["card1"] = "card number is invalid";
        echo $errors["card1"];
   }
//    echo count($errors)."errors count"; 
    if(empty($errors["card2"])) 
        echo $errors["card2"];
    {
        $errors["card2"] = "credit card number cannot be empty";
    }
    
    
        // check expiry
    
        if(strlen($_POST["cust"]["expiry"]) < 2)
   {
       $errors["expiry1"] = "expiry date is invalid";
        echo $errors["expiry1"];
   }
//    echo count($errors)."errors count"; 
    if(empty($errors["expiry2"])) 
        echo $errors["expiry2"];
    {
        $errors["expiry2"] = "expiry date cannot be empty";
    }
    
    
//echo "test messgage";

//    if(empty($_POST["cust"]["email"]))
//       {
//           $errors["email1"] = "You must enter a email";
//       }
//    if(empty($_POST["cust"]["mobile"]))
//        {
//       $errors["mobile1"] = "You must enter a mobile number";
//        }
//    
//    if(empty($_POST["cust"]["card"]))
//       {
//           $errors["card1"] = "You must enter a credit card";
//       }
//    if(empty($_POST["cust"]["expiry"]))
//       {
//           $errors["expiry1"] = "You must enter a date";
//       } 
//    if (count($errors==0))
//    {
//        //redirect to success page as no errors
////        header("Location: order_complete.php");
//        header("Location: order_complete.php");
//        echo "no errors";
//       exit();
//
//    }
    
    echo "TOTAL count errors = ";
    echo count($errors); 
}
    
    
//$errors = array();
//    
//if(empty($_POST['cust']['name']))
//{
//    $errors["cusomername1"] = "movie id is blank";
//}
//
//    
//
//if(count($errors==0))
//    
//    {
//    //redirect to success page
////    header("Location: index.php");
//    exit();
//    
//    }
//}

// Put your PHP functions and modules here
function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}
function movieTable()
{
echo <<< MOVIETABLE
<table>
                <tr>
                    <th>Seat Type</th>
                    <th>Seat Code</th>
                    <th>All day Monday and Wednesday AND 12 PM (Weekdays Only)</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <th>Standard Adult</th>
                    <td>STA</td>
                    <td>$ 14.00</td>
                    <td>$ 19.80</td>

                </tr>
                <tr>
                    <th>Standard Concession</th>
                    <td>STP</td>
                    <td>$ 12.50</td>
                    <td>$ 17.50</td>

                </tr>
                <tr>
                    <th>Standard Child</th>
                    <td>STC</td>
                    <td>$ 11.00</td>
                    <td>$ 15.30</td>

                </tr>
                <tr>
                    <th>First Class Adult</th>
                    <td>FCA</td>
                    <td>$ 24.00</td>
                    <td>$ 30.00</td>

                </tr>
                <tr>
                    <th>First Class Concession</th>
                    <td>FCP</td>
                    <td>$ 22.50</td>
                    <td>$ 27.00</td>

                </tr>
                <tr>
                    <th>First Class Child</th>
                    <td>FCC</td>
                    <td>$ 21.00</td>
                    <td>$ 24.00</td>

                </tr>
            </table>

MOVIETABLE;
}

function movieButtons()
{
echo <<< MOVIEBUTTONS

            <div id="book_buttons_1">
                <h3>Make a Booking for "The Girl in the Spider's Web":</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('WED', '9', '1');showBookingFrom();displayBookingDayTime('Wednesday', '9:00 PM')" type="button" class="button" value="Input Button">Wed : 9PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('THU', '9', '0');showBookingFrom();displayBookingDayTime('Thursday', '9:00 PM')" type="button" class="button" value="Input Button">Thu : 9PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('FRI', '9', '0');showBookingFrom();displayBookingDayTime('Friday', '9:00 PM')" type="button" class="button" value="Input Button">Fri : 9PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('SAT', '6', '0');showBookingFrom();displayBookingDayTime('Saturday', '6:00 PM')" type="button" class="button" value="Input Button">Sat : 6PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '6', '0');showBookingFrom();displayBookingDayTime('Sunday', '6:00 PM')" type="button" class="button" value="Input Button">Sun : 6PM</button>
            </div>

            <div id="book_buttons_2">
                <h3>Make a Booking for "A Star is Born":</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('MON', '6', '1');showBookingFrom();displayBookingDayTime('Monday', '6:00 PM')" type="button" class="button" value="Input Button">Mon : 6PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('TUE', '6', '0');showBookingFrom();displayBookingDayTime('Tuesday', '6:00 PM')" type="button" class="button" value="Input Button">Tue : 6PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('SAT', '3', '0');showBookingFrom();displayBookingDayTime('Saturday', '3:00 PM')" type="button" class="button" value="Input Button">Sat : 3PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '6', '0');showBookingFrom();displayBookingDayTime('Sunday', '6:00 PM')" type="button" class="button" value="Input Button">Sun : 6PM</button>
            </div>

            <div id="book_buttons_3">
                <h3>Make a Booking for "Ralph Breaks the Internet":</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('MON', '12','1');showBookingFrom();displayBookingDayTime('Monday', '12:00 PM')" type="button" class="button" value="Input Button">Mon : 12PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('TUE', '12', '1');showBookingFrom();displayBookingDayTime('Tuesday', '12:00 PM')" type="button" class="button" value="Input Button">Tue : 12PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('WED', '6', '1');showBookingFrom();displayBookingDayTime('Wednesday', '6:00 PM')" type="button" class="button" value="Input Button">Wed : 6PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('THU', '6', '0');showBookingFrom();displayBookingDayTime('Thursday', '6:00 PM')" type="button" class="button" value="Input Button">Thu : 6PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('FRI', '6', '0');showBookingFrom();displayBookingDayTime('Friday', '6:00 PM')" type="button" class="button" value="Input Button">Fri : 6PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('SAT', '12', '0');showBookingFrom();displayBookingDayTime('Saturday', '12:00 PM')" type="button" class="button" value="Input Button">Sat : 12PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '12', '0');showBookingFrom();displayBookingDayTime('Sunday', '12:00 PM')" type="button" class="button" value="Input Button">Sun : 12PM</button>
            </div>

            <div id="book_buttons_4">
                <h3>Make a Booking for "Boy Erased":</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('WED', '12', '1');showBookingFrom();displayBookingDayTime('Wednesday', '12:00 PM')" type="button" class="button" value="Input Button">Wed : 12PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('THU', '12', '1');showBookingFrom();displayBookingDayTime('Thursday', '12:00 PM')" type="button" class="button" value="Input Button">Thu : 12PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('FRI', '12', '1');showBookingFrom();displayBookingDayTime('Friday', '12:00 PM')" type="button" class="button" value="Input Button">Fri : 12PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('SAT', '9', '0');showBookingFrom();displayBookingDayTime('Saturday', '9:00 PM')" type="button" class="button" value="Input Button">Sat : 9PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '9', '0');showBookingFrom();displayBookingDayTime('Sunday', '9:00 PM')" type="button" class="button" value="Input Button">Sun : 9PM</button>
            </div>

MOVIEBUTTONS;
}
function print_footer()
{
  print <<< FOOBAR
<div id ="footer">
printed by alvin alexander,
<br/>devdaily.com
</div>
FOOBAR;
}

?>