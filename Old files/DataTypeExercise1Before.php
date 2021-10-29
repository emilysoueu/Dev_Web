<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php
    $comprimento = 10;
    $altura = 10;
    $area = $comprimento * $altura;
    echo "altura: $altura" . PHP_EOL;
?>

<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php
    $maths = 45;
    $science = 35;
    $total = $maths + $science;
    $totalMarks = 200;
    $percentage = $total / $totalMarks;
    echo $percentage;
  ?>

<h2>Check if the user has admin roles:</h2>
<?php
  $permission = "admin";
  $username = "Fernando";

  echo ($permission === "admin")? "Has" : "Doesn't have.";
?>

<h2>Define and Display a User Name using Strings:</h2>
<?php
echo "Username: $username";
?>

<h2>Check if the variable is null or not:</h2>
<?php
    $variable = null;
    echo is_null($variable)?"É nula":"Não é nula";
?>

</body>
</html>
