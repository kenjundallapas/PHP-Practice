<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4. Temperature Converter</title>
</head>
<body>

<?php

    $celsius = (float)($_POST["celcius"] ?? 0);
    $fahrenheit = ($celsius * 9/5) + 32;
    $fahrenheit_rounded = round($fahrenheit, 2);

    echo "Celsius temperature: <strong>" .$celsius. "°C</strong><br>";
    echo "Converted to Fahrenheit: <strong>" .$fahrenheit_rounded. "°F </strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
