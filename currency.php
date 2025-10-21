<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11. Currency Converter</title>
</head>
<body>

<?php

    $amountPHP = (float)($_POST["amount_php"] ?? 0);
    $rateUSD = 0.018;
    $rateEUR = 0.016;
    $rateJPY = 2.70;
    $amountUSD = $amountPHP * $rateUSD;
    $amountEUR = $amountPHP * $rateEUR;
    $amountJPY = $amountPHP * $rateJPY;

    echo "Amount in PHP: ₱<strong>" . number_format($amountPHP, 2) . "</strong><br>";
    echo "Equivalent in USD (Rate: $rateUSD): $<strong>" . number_format($amountUSD, 2) . "</strong><br>";
    echo "Equivalent in EUR (Rate: $rateEUR): $<strong>" . number_format($amountEUR, 2) . "</strong><br>";
    echo "Equivalent in JPY (Rate: $rateJPY): $<strong>" . number_format($amountJPY, 2) . "</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
