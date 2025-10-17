<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1. Introduce Yourself</title>
</head>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
You are <?php echo $_POST["age"]; ?> years old.<br>
Your favorite color is: <?php echo $_POST["color"]; ?>

<p><a href="index.php">Go back to the index</a></p>

</body>
</html>
