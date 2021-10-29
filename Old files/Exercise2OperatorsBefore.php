<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    <?php
      $number1 = 10;
      --$number1;
      $number1 -= 1;
     ?>

    <h2>Show the negative of 5 using Bitwise Operator:</h2>

    <h2>Execute a dos or linux command using Execution Operator:</h2>
      <?= `ls -l`?>

    <h2>Raise and Error and control it using Execution Operators:</h2>
    <?php
      $valor = 1/0;
      echo php_errormsg;
     ?>

    <h2>Show an example of Operator Precedence Operator:</h2>
    <?= (2*5+1) ?>

</body>
</html>
