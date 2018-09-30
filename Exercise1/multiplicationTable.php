<html>
  <head>
    <title> Multiplication Table </title>
  <head>
  <body>
    <table>
      <?php
        for ($i=0; $i<101; $i++)
        {
          echo "<tr>";
          if($i != 0)
          {
            echo "<td>$i</td>";
          }
          else
          {
            echo "<td></td>";
          }

          for ($j=1; $j<101; $j++)
          {
            if($i == 0)
            {
              echo "<td>$j</td>";
            }
            else
            {
              echo "<td>".($i*$j)."</td>";
            }
          }
          echo"</tr>";
        }
      ?>
    </table>
  </body>
</html>
