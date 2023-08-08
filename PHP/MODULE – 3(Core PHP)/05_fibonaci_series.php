<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34:</h3>
</body>
</html>



<?php
$no = 10; 
$b= 0;
$c = 1;

echo "Fibonacci Series: ";
echo $b. ", " . $c;

for ($i = 3; $i <= $no; $i++) 
{
    $number = $b+ $c;
    echo ", " . $number;

    $b= $c;
    $c = $number;
}
?>
