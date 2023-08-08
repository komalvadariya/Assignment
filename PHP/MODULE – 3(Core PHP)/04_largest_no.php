<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a PHP program to find the largest of three numbers using ternary
Operator:</h3>
</body>
</html>
<?php
$num1 = 15455;
$num2 = 2960;
$num3 = 4851;
$largest_no = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);



echo "The largest no.$num1, $num2, and $num3 is:  <br>  $largest_no";
?>
