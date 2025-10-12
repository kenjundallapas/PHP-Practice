<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11. Currency Converter</title>
</head>
<body>

<?php

    $amountPHP = 1000;
    $rateUSD = 0.018;
    $rateEUR = 0.016;
    $rateJPY = 2.70;
    $amountUSD = $amountPHP * $rateUSD;
    $amountEUR = $amountPHP * $rateEUR;
    $amountJPY = $amountPHP * $rateJPY;

    echo "Amount in PHP: ₱$amountPHP<br>";
    echo "Equivalent in USD: $" .number_format($amountUSD, 2). "<br>";
    echo "Equivalent in EUR: €" .number_format($amountEUR, 2). "<br>";
    echo "Equivalent in JPY: ¥" .number_format($amountJPY, 2). "<br>";

?>

</body>
</html>
