<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
      <?php
        $number1 = 10;
        $number2 = 20;
        $total = $number1 + $number2;
        echo "total: $total" . PHP_EOL;
      ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php
      $media = 6.7;
      echo ($media > 7) ? "Passou" : "Reprovou";
    ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
    <?php
      $number = 2;
      echo ($number%2 == 0) ? "Par" : "Ímpar";
    ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
    <?php
      $rights = 1;
      $logedin = 1;
      echo (($rights == 1) && ($logedin == 1))? "Has rights": "Does not have.";
    ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
    <?php
      $integer = 10;
      $inter +=10;
     ?>

</body>
</html>
