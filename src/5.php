<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Ask the user to guess the number
echo "Guess the number: ";
$guess = trim(fgets(STDIN));

if ($guess === $randomNumber) {
    echo "You guessed it! The answer was $randomNumber\n";
} else {
    echo "Nope, try again!\n";
}
?>
