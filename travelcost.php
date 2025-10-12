<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12. Travel Cost Estimator</title>
</head>
<body>

<?php

    $distance = 250;
    $fuel_consumption = 12;
    $fuel_price = 65;
    $fuel_needed = $distance / $fuel_consumption;
    $total_cost = $fuel_needed * $fuel_price;

    echo "Distance to Travel: $distance km<br>";
    echo "Fuel Consumption: $fuel_consumption km/l<br>";
    echo "Fuel Price: ₱$fuel_price per liter<br>";
    echo "Estimated Fuel Needed: " .number_format($fuel_needed, 2). " liters<br>";
    echo "Estimated Travel Cost: ₱" .number_format($total_cost, 2). "<br>";

?>

</body>
</html>
