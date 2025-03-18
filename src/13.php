<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
return rand(1, 10);
}

// Function to calculate the sum of two numbers
function sum($a, $b) {
return $a + $b;
}

// Function to calculate the difference of two numbers
function subtract($a, $b) {
return $a - $b;
}

// Function to calculate the product of two numbers
function multiply($a, $b) {
return $a * $b;
}

// Function to calculate the quotient of two numbers
function divide($a, $b) {
return $a / $b;
}

// Function to calculate the remainder of two numbers
function remainder($a, $b) {
return $a % $b;
}

// Function to check if a number is even or odd
function isEven($number) {
return ($number % 2 == 0);
}

// Function to check if a number is positive, negative or zero
function sign($number) {
if ($number > 0) {
return 'positive';
} else if ($number < 0) {
return 'negative';
} else {
return 'zero';
}
}

// Function to check if a number is prime or composite
function isPrime($number) {
if ($number <= 1) {
return false;
}
for ($i = 2; $i < sqrt($number); $i++) {
if ($number % $i == 0) {
return false;
}
}
return true;
}

// Function to find the greatest common divisor of two numbers
function gcd($a, $b) {
while ($b != 0) {
$temp = $a;
$a = $b;
$b = $temp % $b;
}
return $a;
}

// Function to find the least common multiple of two numbers
function lcm($a, $b) {
$gcd = gcd($a, $b);
return ($a * $b) / $gcd;
}
?>