<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812</h3>

<form method="post">
    <label for="number">Enter Number:</label>
    <input type="number" name="number" id="number"><br><br>
    <input type="submit" value="submit" name=submit>
</body>
</html>



<?php

if($_POST){
    $num=$_POST['number'];
    $a=$num;
    $total=0;


    while($a!=0){
        $rem=$a%10;
        $total=$total+($rem*$rem*$rem);
        $a=$a/10;

    }if($num==$total)
    {
        echo "Yes $num an armstrong number";
    } else{
        echo "$num not armstrong number. ";
    }
}
?>
    