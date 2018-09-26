<?php
  $Q1 = $_POST["Q1"];
  $Q2 = $_POST["Q2"];
  $Q3 = $_POST["Q3"];
  $Q4 = $_POST["Q4"];
  $Q5 = $_POST["Q5"];

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

  <body>
    <div>
      Results:
    </div>

    <?php
      echo "Question1: How many holes is a full round of golf ?".'\n';
      echo "You answered: ".$Q1.'\n';
      echo "Correct answer: 18".'\n';
      echo PHP_EOL;
      echo "Question2: What is a birdie in a Par 3 ?".'\n';
      echo "You answered: ".$Q2.'\n';
      echo "Correct answer: 2".'\n';
      echo PHP_EOL;
      echo "Question3: What is a bogey in a Par 5 ?".'\n';
      echo "You answered: ".$Q3.'\n';
      echo "Correct answer: 6".'\n';
      echo PHP_EOL;
      echo "Question4: How many tournaments has Tiger Woods won on the PGA tour so far ?".'\n';
      echo "You answered: ".$Q4.'\n';
      echo "Correct answer: 80".'\n';
      echo PHP_EOL;
      echo "Question5: Guess who is my favourite player on the tour: ".'\n';
      echo "You answered: ".$Q5.'\n';
      echo "Correct answer: Jordan Spieth".'\n';
      echo PHP_EOL;
      echo "You got ".$correct." answered correctly!";
      echo "Score percentage: ".$correct*20."%";
     ?>
  </body>
</html>
