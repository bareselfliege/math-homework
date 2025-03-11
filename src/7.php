<?php
function getRandomHomework($min, $max) {
    $randomNumber = mt_rand($min, $max);
    switch ($randomNumber) {
        case 1:
            return "Solve the equation: 2x + 5 = 11";
        case 2:
            return "Find the area of a rectangle with dimensions 5 cm by 3 cm.";
        case 3:
            return "Simplify the expression: (3x^2 + 5x - 2) / (x + 2)";
        case 4:
            return "Find the distance between two points on a coordinate plane: (3, 4) and (6, 8).";
        case 5:
            return "Solve the system of equations: 2x + y = 10; x - 3y = -4.";
    }
}
?>
