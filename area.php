<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3. Area and Perimeter of a Rectangle</title>
</head>
<body>

<h2>Area and Perimeter Results</h2>

<?php

    $length = (float)($_POST["length"] ?? 0);
    $width = (float)($_POST["width"] ?? 0);
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    
    echo "Length:  <strong>".$length."</strong><br>";
    echo "Width: <strong>".$width."</strong><br>";
    echo "Area of the rectangle: " .$area. "<br>";
    echo "Perimeter of the rectangle: " .$perimeter. "<br>";

?>
<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
