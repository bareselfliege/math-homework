<?php
// Example PHP code for Math Homework Assignment 101

// Define the problem statement as an array of problems
$problems = [
    "What is the area of a circle with a radius of 5 units?",
    "If you have 3 apples and want to give away 2, how many are left?",
    "What is the volume of a rectangular prism with dimensions 4 meters by 6 meters by 8 meters?"
];

// Loop through each problem statement
foreach ($problems as $problem) {
    echo "<h1>{$problem}</h1>";
    // Calculate and display the solution for each problem
    if (isset($_POST[$problem]) && $_POST[$problem] !== "") {
        echo "Solution: <br><p>" . $_POST[$problem] . "</p></br>";
    }
}
?>
