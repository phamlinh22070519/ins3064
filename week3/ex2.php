<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $minValue = myMin(4, 5, 6);
    echo "Giá trị nhỏ nhất là: $minValue";

    function myMin($a, $b, $c) {
        $min = $a;
        if ($b < $min) {
            $min = $b;
        }
        if ($c < $min) {
            $min = $c;
        }
        return $min;
    }
    ?>
</body>
</html>