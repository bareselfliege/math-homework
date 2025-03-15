function getRandomNumber($min, $max) {
    $range = $max - $min;
    return $min + (int)(rand() * $range);
}

$randomNumber1 = getRandomNumber(1, 5);
$randomNumber2 = getRandomNumber(5, 10);
