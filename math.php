<html>
<body>

<h2>Simple Math Results</h2>

<?php

// Check if the form was submitted via POST before trying to access $_POST keys
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve and convert the input values to numbers
    $a = (float)($_POST["a"] ?? 0); // Use 0 if 'a' is missing (safe practice)
    $b = (float)($_POST["b"] ?? 0); // Use 0 if 'b' is missing
    
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    
    // Handle division by zero to prevent an error
    $quotient = ($b != 0) ? ($a / $b) : "Undefined (Cannot divide by zero)";

    echo "Value of A: " . $a . "<br>";
    echo "Value of B: " . $b . "<br>";
    echo "The sum is: " . $sum . "<br>";
    echo "The difference is " . $difference . "<br>";
    echo "The product is " . $product . "<br>";
    echo "The quotient is " . $quotient . "<br>";
    
} else {
    // Message if the page is accessed directly
    echo "Please use the form to input values for calculation.";
}

?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>