<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12. Travel Cost Estimator</title>
</head>
<body>

<?php

    $distance = (float)($_POST["distance"] ?? 0);
    $fuel_consumption = (float)($_POST["fuel_consumption"] ?? 0);
    $fuel_price = (float)($_POST["price"] ?? 0);
    $fuel_needed = 0;
    $total_cost = 0;

    if ($fuel_consumption > 0) {
        $fuel_needed = $distance / $fuel_consumption;
        $total_cost = $fuel_needed * $fuel_price;
    }

echo "<h3>Travel Cost Estimate:</h3>";
    echo "Distance to Travel: <strong>" . $distance . " km</strong><br>";
    echo "Fuel Consumption: <strong>" . $fuel_consumption . " km/l</strong><br>";
    echo "Fuel Price: ₱<strong>" . number_format($fuel_price, 2) . " per liter</strong><br>";
    echo "<hr>";
    
    if ($fuel_consumption > 0) {
        echo "Estimated Fuel Needed: <strong>" . number_format($fuel_needed, 2) . " liters</strong><br>";
        echo "Estimated Travel Cost: ₱<strong>" . number_format($total_cost, 2) . "</strong><br>";
    } else {
        echo "<p style='color:red;'>Estimated cost cannot be calculated. Fuel Consumption must be greater than 0 km/l.</p>";
    }

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
