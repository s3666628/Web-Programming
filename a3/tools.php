<?php
  session_start();

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