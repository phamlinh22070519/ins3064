<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // http://ins3064.test/week%202/ex3.php?x=3&y=5
    $x = $_GET['x'];
    $y = $_GET['x'];

    echo "x == y: " . ($x == $y) . "<br/>";
    echo "x != y: " . ($x != $y) . "<br/>";
    echo "x < y: " . ($x < $y) . "<br/>";
    echo "x > y: " . ($x > $y) . "<br/>";
    echo "x <= y: " . ($x <= $y) . "<br/>";
    echo "x >= y: " . ($x >= $y) . "<br/>";
   ?>
</body>
</html>