<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6. Salary Calculator</title>
</head>
<body>

<?php

    $basic_salary = 30000;
    $allowance = 5000;
    $deduction = 3000;
    $net_salary = $basic_salary + $allowance - $deduction;

    echo "Basic Salary: ₱" .$basic_salary. "<br>";
    echo "Allowance: ₱" .$allowance. "<br>";
    echo "Deduction: ₱" .$deduction. "<br>";
    echo "-----------------------------<br>";
    echo "Net Salary: ₱" .$net_salary. "<br>";

?>

</body>
</html>
