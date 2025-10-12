<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9. Bank Account Simulation</title>
</head>
<body>

<?php

    $balance = 1000;
    $deposit = 500;
    $withdraw = 300;
    $balance = $balance + $deposit;
    $balance = $balance - $withdraw;

    echo "Initial Balance: 1000<br>";
    echo "Deposit Amount: $deposit<br>";
    echo "Withdrawal Amount: $withdraw<br>";
    echo "Final Balance: $balance<br>";

?>

</body>
</html>
