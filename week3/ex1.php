<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum = sum(4,5);
    echo($sum);
    function sum($a,$b) {
        return $a + $b; 
    }
    function swap($a,$b) {
        $stemp = $a;
        $a = $b;
        $b = $stemp;
    }
    $a = 5;
    $b = 6;
    echo ("Number a is " , $a);
    echo "<br/>";
    echo ("Number b is " , $b);
    swap($a,$b);
    echo "<br/>";
    echo ("Number a is " , $a);
    echo "<br/>";
    echo ("Number b is " , $b);
    ?>
</body>
</html>