<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5. Swapping Variables</title>
</head>
<body>

<?php

    $x = (float)($_POST["x"] ?? 0);
    $y = (float)($_POST["y"] ?? 0);
    $x_initial = $x;
    $y_initial = $y;
    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "<h3>Before swapping:</h3>";
    echo "X = <strong>" .$x_initial . "</strong><br>";
    echo "Y = <strong>" .$y_initial . "</strong><br>";
    echo "<h3>After swapping:</h3>";
    echo "X is now = <strong>" .$x. "</strong><br>";
    echo "Y is now = <strong>" .$y. "</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
