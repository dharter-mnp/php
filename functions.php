<?php

function add($augend, $addend){
    return (is_numeric($augend) and is_numeric($addend))? ($augend + $addend) : null;
}

function subtract($minuend, $subtrahend){
    return (is_numeric($minuend) and is_numeric($subtrahend)) ? $minuend - $subtrahend : null;
}

function multiply($multiplicand, $multiplier){
    return (is_numeric($multiplicand) and is_numeric($multiplier)) ? $multiplicand * $multiplier : null;
}

function divide($dividend, $divisor){
    return (is_numeric($dividend) and is_numeric($divisor) and $divisor != 0) ? $dividend / $divisor : null;
}

