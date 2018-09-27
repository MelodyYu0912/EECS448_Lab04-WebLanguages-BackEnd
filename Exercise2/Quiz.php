<?php
  $Q1 = $_POST['Q1'];
  $Q2 = $_POST['Q2'];
  $Q3 = $_POST['Q3'];
  $Q4 = $_POST['Q4'];
  $Q5 = $_POST['Q5'];

  $correct = 0;

  if($Q1 == "18") { $correct++; }
  if($Q2 == "2") { $correct++; }
  if($Q3 == "6") { $correct++; }
  if($Q4 == "80") { $correct++; }
  if($Q5 == "Jordan Spieth") { $correct++; }
?>


<html>
  <head>
    <title> Quiz Result </title>
  </head>

  <body style="background-color:rgb(214, 214, 194); padding-left:25px">
    <div style="font-family:arial; font-size: 25pt; font-weight:700px; line-height:50pt">
      Quiz Results: <br>
    </div>
    <div style="font-family:verdana; line-height:20pt">
      <?php
        echo "Question1: How many holes is a full round of golf ?".'<br>';
        echo "You answered: ".$Q1.'<br>';
        echo "Correct answer: 18".'<br>';
        echo '<br>';
        echo "Question2: What is a birdie in a Par 3 ?".'<br>';
        echo "You answered: ".$Q2.'<br>';
        echo "Correct answer: 2".'<br>';
        echo '<br>';
        echo "Question3: What is a bogey in a Par 5 ?".'<br>';
        echo "You answered: ".$Q3.'<br>';
        echo "Correct answer: 6".'<br>';
        echo '<br>';
        echo "Question4: How many tournaments has Tiger Woods won on the PGA tour so far ?".'<br>';
        echo "You answered: ".$Q4.'<br>';
        echo "Correct answer: 80".'<br>';
        echo '<br>';
        echo "Question5: Guess who is my favourite player on the tour: ".'<br>';
        echo "You answered: ".$Q5.'<br>';
        echo "Correct answer: Jordan Spieth".'<br>';
        echo '<br>';
        echo "You got ".$correct." answered correctly!".'<br>';
        echo "Score percentage: ".($correct*20)."%";
      ?>
    </div>
    <br>
    <a href="Quiz.html" class="button">Take Quiz Again</a> &nbsp&nbsp&nbsp&nbsp
    <a href="index.html" class="button">Back To Index Page</a><br>
  </body>
</html>
