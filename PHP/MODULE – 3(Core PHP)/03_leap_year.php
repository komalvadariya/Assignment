<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a PHP program to check Leap years between 1901 to 2016 Using
nested if:</h3>
</body>
</html>
<?php
$startYear = 1901;
$endYear = 2016;
echo "Leap years between $startYear and $endYear:<br>";



for ($year = $startYear; $year <= $endYear; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo $year."<br>";
            }
        } else {
            echo $year."<br>";
        }
    }
}
?>
