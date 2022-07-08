<?php
$number = $_GET['number'];
$total = 0;

foreach ($number as $nm ) {
    $total += $nm;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Total = <?= $total ?></h1>
</body>
</html>

