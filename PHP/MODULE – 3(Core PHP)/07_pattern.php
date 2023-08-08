<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program for this Pattern:
</h3>
</body>
</html>


<?php
for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) 
        {
        if ($i == 1 || $i == 5) 
        {
            echo "*";
        }elseif ($j==1 || $j==5)
        {
            echo "*<br>";
        }else{
            echo " ";
        }
    } 
} 
?>