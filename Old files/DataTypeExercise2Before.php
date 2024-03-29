<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

<?php

    $studentName = "Alex";
    $classSection = "5C";
    $age = 10;
    $sex = "Male";
    $contact = "+123456789";

    //Initiate the Variables
    $maths = 0;
    $science = 0;
    $total = 0;
    $totalMarks = 200;
    $percentage =  0;
    $passed = null;

?>


<h2>Student Information:</h2>

<table border="2">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Class;</td>
      <td>Age</td>
      <td>Sex</td>
      <td>Contact</td>
    </tr>
    <tr>
      <td><?=$studentName?></td>
      <td><?=$classSection?></td>
      <td><?=$age?></td>
      <td><?=$sex?></td>
      <td><?=$contact?></td>
    </tr>
  </tbody>
</table>

<h2>Exams Attended:</h2>
<?php
    $maths = 56;
    $science = 78;
    $total = $maths + $science;
    $examAttended = ($total > 0) ? true : false;
?>

<p>Exam Attended : <?= ($examAttended) ? "Yes" : "No"; ?></p>

<h2>Final Marks:</h2>
<p>Total Marks : <?= $total ?></p>

<h2>Percentage:</h2>

<?php
    $percentage = ( $total / $totalMarks) * 100;
?>
<p>Percentage : <?= $percentage ?></p>

<h2>Result:</h2>
<p>Final Result <?= ($percentage >= 60)  ? "Passed" : "Failed"; ?></>

</body>
</html>
