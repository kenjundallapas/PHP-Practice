<html>
<body>

<h2>Simple Math Results</h2>

<?php

    
    $a = (float)($_POST["a"] ?? 0);
    $b = (float)($_POST["b"] ?? 0); 
    
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = ($b != 0) ? ($a / $b) : "Undefined (Cannot divide by zero)";

    echo "Value of A: " . $a . "<br>";
    echo "Value of B: " . $b . "<br>";
    echo "The sum is: " . $sum . "<br>";
    echo "The difference is " . $difference . "<br>";
    echo "The product is " . $product . "<br>";
    echo "The quotient is " . $quotient . "<br>";
    
?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>