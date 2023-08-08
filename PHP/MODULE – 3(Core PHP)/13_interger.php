<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total:</h3>
</body>
</html>
<?php

 

$num = [25,65,78,98,35,25,45];
$total = 0;

for ($i = 0; $i < count($num); $i++)
 {
    $total=$total+ $num[$i];
}

echo "The Total is:".$total."<br>";






$num=array(12,36,45,89,67,45,22,45,75,69);
$total=0;

for ($i=0; $i < count($num) ; $i++)
 { 
    $total=$total+$num[$i];
}

echo "The Total is:".$total;
?>
