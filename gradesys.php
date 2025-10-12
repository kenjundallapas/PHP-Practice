<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10. Simple Grading System</title>
</head>
<body>

<?php

    $math = 85;
    $english = 92;
    $science = 78;
    $average = ($math + $english + $science) / 3;

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

    echo "Math Score: $math<br>";
    echo "English Score: $english<br>";
    echo "Science Score: $science<br>";
    echo "Average Score: " .number_format($average, 2). "<br>";
    echo "Grade: $grade<br>";

?>

</body>
</html>
