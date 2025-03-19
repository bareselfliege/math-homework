<?php
// Generate a random number between 1 and 50
$randomNumber = rand(1, 50);

// Ask the user to guess the number
echo "Guess the number!";
$userInput = readline();

if ($userInput === $randomNumber) {
    echo "Correct! You got it right.";
} else {
    echo "Incorrect! The correct answer was $randomNumber.";
}
?> 