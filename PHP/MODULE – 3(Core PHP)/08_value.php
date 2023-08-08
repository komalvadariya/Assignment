<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>What will be the values of $a and $b after the code below is executed?
Explain your answer.
$a = '1';
$b = &$a;
$b = "2$b";</h3>
</body>
</html>




<?php

$a = '1'; 
$b = &$a; 
$b = "2$b";
echo $b;
?>
