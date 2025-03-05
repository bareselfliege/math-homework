<?php

function get_random_math_problem() {
    $operators = array('+', '-', '*', '/');
    $numbers = array(5, 10, 15, 20, 25);
    shuffle($numbers);
    $num1 = array_shift($numbers);
    $num2 = array_shift($numbers);
    $operator = array_shift($operators);
    return "$num1 $operator $num2";
}
?>