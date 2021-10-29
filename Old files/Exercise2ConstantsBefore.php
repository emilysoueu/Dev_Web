<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>

    <h2>String Constant:</h2>
    <?php
      define ("NAME", "Fernando");
      echo NAME;
    ?>

    <h2>Integer Constant:</h2>
    <?php
      define ("AGE", 29);
      echo AGE;
    ?>

    <h2>Print Constant from Function:</h2>
    <?php
      function imprimindo(){
        echo NAME;
      }
    ?>

    <h2>Display Magic Constant:</h2>
    <?php
      echo __LINE__;
    ?>

</body>
</html>
