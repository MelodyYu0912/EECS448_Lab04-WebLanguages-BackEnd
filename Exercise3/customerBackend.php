<?php
  $dumpling = $_POST['dumpling'];
  $wonton = $_POST['wonton'];
  $noodles = $_POST['noodles'];
  $tomato = $_POST['tomato'];
  $curry = $_POST['curry'];
  $userName = $_POST['userName'];
  $pwd = $_POST['userPwd'];
  $shipping = $_POST['shippingOption'];

  if ($dumpling == "") {$dumpling=0;}
  if ($wonton == "") {$wonton=0;}
  if ($noodles == "") {$noodles=0;}
  if ($tomato == "") {$tomato=0;}
  if ($curry == "") {$curry=0;}

  $dTotal = ($dumpling * 8);
  $wTotal = ($wonton * 8);
  $nTotal = ($noodles * 10);
  $tTotal = ($tomato * 11);
  $cTotal = ($curry * 13);

  $Total = $dTotal + $wTotal + $nTotal + $tTotal + $cTotal + $shipping;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Web Store Backend</title>
    <link href="style.css"
          rel="stylesheet"
          type="text/css"/>
  </head>

  <body>
    <div id="title">
      Chinese Restuarant Online Order Receipt
    </div>

    <div>
        <?php
          echo "Welcome!";
          echo "<br>";
          echo "Username: ".$userName.'<br>';
          echo "Password: ".$pwd.'<br>';
          echo "==============================================================================================";
          echo "<br>";
          echo "<table class='receipt'>";
          echo "<tr>";
          echo "<th></th>";
          echo "<th>"."Quantity"."</th>";
          echo "<th>"."Cost Per Item"."</th>";
          echo "<th>"."Sub Total"."</th>";
          echo "</tr>";

          echo "<tr>";
          echo "<th>"."Pork and Chives Dumpling"."</th>";
          echo "<td>".$dumpling."</td>";
          echo "<td>"."$8.00"."</td>";
          echo "<td>".$dTotal."</td>"."</tr>";
          echo "<th>"."Saut Wonton"."</th>";
          echo "<td>".$wonton."</td>";
          echo "<td>"."$8.00"."</td>";
          echo "<td>".$wTotal."</td>";
          echo"</tr>";

          echo "<tr><th>Green Onion Noodles</th><td>".$noodles."</td><td>$10.00</td><td>".$nTotal."</td></tr>";
          echo "<tr><th>Scrambled Eggs with Tomatoes over Rice</th><td>".$tomato."</td><td>$11.00</td><td>".$tTotal."</td></tr>";
          echo "<tr><th>Curry Beef Brisket over Rice</th><td>".$curry."</td><td>$13.00</td><td>".$cTotal."</td></tr>";
          echo "<tr><th>Shipping</th><td colspan='2'></td><td>".$shipping."</td></tr>";
          echo "<tr><td colspan='3'></td><td>".$Total."</td></tr>";
          echo "</table>";
          echo "==============================================================================================";
          echo '<br>';
          echo "Thanks for ordering!";
         ?>
    </div>
  </body>
</html>
