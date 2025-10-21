<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9. Bank Account Simulation</title>
</head>
<body>

<?php

    $initial_balance = 1000.00;
    $deposit = (float)($_POST["deposit"] ?? 0);
    $withdraw = (float)($_POST["withdraw"] ?? 0);
    $final_balance = $initial_balance;
    $final_balance = $final_balance + $deposit;
    $final_balance = $final_balance - $withdraw;

    $initial_formatted = number_format($initial_balance, 2);
    $deposit_formatted = number_format($deposit, 2);
    $withdraw_formatted = number_format($withdraw, 2);
    $final_formatted = number_format($final_balance, 2);

    echo "<h3>Transaction Summary:</h3>";
    echo "Initial Balance: ₱<strong>" . $initial_formatted . "</strong><br>";
    echo "Deposit Amount: ₱<strong>" . $deposit_formatted . "</strong><br>";
    echo "Withdrawal Amount: ₱<strong>" . $withdraw_formatted . "</strong><br>";
    echo "Final Balance: ₱<strong>" . $final_formatted . "</strong><br>";

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
