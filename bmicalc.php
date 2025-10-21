<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7. BMI Calculator</title>
</head>
<body>

<?php

    $weight = (float)($_POST["weight"] ?? 0);
    $height = (float)($_POST["height"] ?? 0);
    $bmi = 0;
    
    if ($height > 0) {
        $bmi = $weight / ($height * $height);
        $bmi = round($bmi, 2);
    } else {
        $bmi = "N/A (Height must be > 0)";
    }

    echo "Weight: <strong> " .$weight. " kg</strong><br>";
    echo "Height: <strong>" .$height. " m</strong><br>";
    echo "BMI: <strong>" .$bmi. "</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
