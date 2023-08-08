<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array:</h3>
</body>
</html>




<h4>Array function:</h4>

<?php

$companies = array("Apple", "Microsoft", "Google"); 

echo "<pre>";
print_r($companies)."<br>";
echo "</pre>";
?>

<h4> shorting syntax:</h4>
<?php
$Trainning = ["IT" => "Tops","Tops" => "IT"];
echo "<pre>";
print_r($Trainning)."<br>";
echo "</pre>";
?>




<h4>multidimensional array:</h4> 
<?php
$Student=array(array("Sachin",25,5),array("Rahul",35,3),array("Virat",15,4),array("Hardik",30,3,),array("Ravindra",45,2),array("Rohit",32,1));
echo "<pre>";
print_r($Student)."<br>";
echo "</pre>";
?>


<h4>json string convert to array:</h4>
<?php
$jsonString = '{"name":"Tops","institute":true}';
?>


<h4>Convert JSON string to array by json_decode:</h4>

<?php
$array = json_decode($jsonString,true);
echo "<pre>";
var_dump($array);
echo "<br>";
print_r($array);
echo "</pre>";
?>


<h4>array convert to JASON string by json_encode:</h4>
<?php
$data = array(
    "name" => "Tops",
   "city" => "Ahemdabad",
   "state" => "Gujarat"
);
?>




<h4> Convert array to a JSON string:</h4>
<?php
$jsonString = json_encode($data);
echo $jsonString;
?>

