<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write program to remove duplicate values from array:</h3>
</body>
</html>


<?php

$array = [1,5,1,9,7,8,1,5,45,78,45,9,5,1,7];
$uniqueArray = array_keys(array_flip($array));

foreach ($uniqueArray as $value) {
    echo $value." ";
}
?>
