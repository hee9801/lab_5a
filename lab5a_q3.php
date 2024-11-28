<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 10;
        $width = 5;
        $area = calculateArea($length, $width);
    ?>

    <b><p>The area of a rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is: <?php echo $area; ?></p>
</body>
</html>
