<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7. BMI Calculator</title>
</head>
<body>

<?php

    $weight = 65;
    $height = 1.70;
    $bmi = $weight / ($height * $height);
    $bmi = round($bmi, 2);

    echo "Weight: " .$weight. " kg<br>";
    echo "Height: " .$height. " m<br>";
    echo "BMI: " .$bmi. "<br>";

?>

</body>
</html>
