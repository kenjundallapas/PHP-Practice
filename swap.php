<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5. Swapping Variables</title>
</head>
<body>

<?php

    $x = 84;
    $y = 26;

    echo "Before swapping:<br>";
    echo "x = " .$x. "<br>";
    echo "y = " .$y. "<br><br>";

    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "After swapping:<br>";
    echo "x = " .$x. "<br>";
    echo "y = " .$y. "<br>";

?>

</body>
</html>
