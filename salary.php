<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6. Salary Calculator</title>
</head>
<body>

<?php

    $basic_salary = (float)($_POST["basic_salary"] ?? 0);
    $allowance = (float)($_POST["allowance"] ?? 0);
    $deduction = (float)($_POST["deduction"] ?? 0);
    $net_salary = $basic_salary + $allowance - $deduction;

    echo "Basic Salary: ₱<strong>" .$basic_salary. "</strong><br>";
    echo "Allowance: ₱<strong>" .$allowance. "</strong><br>";
    echo "Deduction: ₱<strong>" .$deduction. "</strong><br>";
    echo "-----------------------------<br>";
    echo "Net Salary: ₱<strong>" .$net_salary. "</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
