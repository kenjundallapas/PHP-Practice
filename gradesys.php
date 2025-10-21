<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10. Simple Grading System</title>
</head>
<body>

<?php

    $math = (float)($_POST["math"] ?? 0);
    $english = (float)($_POST["english"] ?? 0);
    $science = (float)($_POST["science"] ?? 0);
    $average = ($math + $english + $science) / 3;
    $grade = "N/A";

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    echo "Math Score: <strong>$math</strong><br>";
    echo "English Score: <strong>$english</strong><br>";
    echo "Science Score: <strong>$science</strong><br>";
    echo "Average Score: <strong>" .number_format($average, 2). "</strong><br>";
    echo "Grade: <strong>$grade</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
