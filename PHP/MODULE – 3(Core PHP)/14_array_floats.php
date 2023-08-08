<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns:</h3>
</body>
</html>
<?php




$balance = array(
    array(25.50, 19.30, 14.750, 31.80, 11.30),
    array(5.50, 7.450, 110.105, 57.20, 45.30),
    array(1.50, 11.430, 25.40, 13.90, 95.80)
);

echo "index value is:";
    print_r($balance[1][3]);
?>
