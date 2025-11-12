<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width){
        $area = $length * $width;
        return $area;
    }

    $length = 8;
    $width = 4;
    $result = calculateArea($length, $width);

    echo "The area of rectangle width of $width and $length is $result";
    ?>
</body>
</html>
