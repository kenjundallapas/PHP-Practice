<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8. String Manipulation</title>
</head>
<body>

<?php

    $sentence = "vai TOMA TOMA toma vai";
    $numChars = strlen($sentence);
    $numWords = str_word_count($sentence);
    $upper = strtoupper($sentence);
    $lower = strtolower($sentence);

    echo "Original Sentence: $sentence<br>";
    echo "Number of Characters: $numChars<br>";
    echo "Number of Words: $numWords<br>";
    echo "Uppercase: $upper<br>";
    echo "Lowercase: $lower<br>";

?>

</body>
</html>
