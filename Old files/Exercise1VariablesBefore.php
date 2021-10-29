<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>

    <h2>String Variable:</h2>
    <?php
      $var_string = "String";
      echo $var_string;
    ?>

    <h2>Integer Variable:</h2>
    <?php
      $var_int = 10;
      echo $var_int;
    ?>

    <h2>Print Variable from Function:</h2>
    <?php
      function funcao(){
        $variavel = "Fernando";
        echo $variavel;
      }
    ?>

    <h2>Static Variable:</h2>
    <?php
      function contador(){
        static $i = 0;
        echo $i;
        i++;
      }
      contador();
      contador();
    ?>

    <h2>Global Variable:</h2>
    <?php
      global $var_global;
      $var_global = 1;
      echo $var_global;
    ?>

    <h2>Super Global Variable:</h2>
    <?php
      echo GLOBALS["var_global"];
     ?>

    <h2>Variables of Variables:</h2>
    <?php
      $name = "Fernando";
      $fist_name = "name";

      echo $$fist_name;
    ?>

</body>
</html>
