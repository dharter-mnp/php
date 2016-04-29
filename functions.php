<?php

function add(&$augend, &$addend){
    return (is_numeric($augend) and is_numeric($addend))? ($augend + $addend) : null;
}

function subtract(&$minuend, &$subtrahend){
    return (is_numeric($minuend) and is_numeric($subtrahend)) ? $minuend - $subtrahend : null;
}

function multiply(&$multiplicand, &$multiplier){
    return (is_numeric($multiplicand) and is_numeric($multiplier)) ? $multiplicand * $multiplier : null;
}

function divide(&$dividend, &$divisor){
    return (is_numeric($dividend) and is_numeric($divisor) and $divisor != 0) ? $dividend / $divisor : null;
}

function compare($x, $y, $isSameType = false){
    return ($isSameType) ? $x === $y : $x == $y;
}


$operator1 = 10;
$operator2 = 2;

echo "($operator1 / $operator2 +(($operator1 * $operator2)- $operator2)) = " . add(divide($operator1,$operator2),subtract(multiply($operator1,$operator2),$operator2)) . "\n";

printf("4 = \"4\" : %s\n", ((compare(4, "4")) ? 'true' : 'false'));
printf("5 = \"5\" : %s\n", ((compare(5, "5", true)) ? 'true' : 'false'));
printf("4 = 4.0 : %s\n", ((compare(4, 4.0)) ? 'true' : 'false'));
printf("5 = 5.0 : %s\n", ((compare(5, 5.0, true)) ? 'true' : 'false'));
