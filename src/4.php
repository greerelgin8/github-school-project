<?php

function getRandomInteger($min = 0, $max = PHP_INT_MAX) {
    return mt_rand($min, $max);
}

$randomNumber = getRandomInteger(1, 10);

echo $randomNumber;

?>
