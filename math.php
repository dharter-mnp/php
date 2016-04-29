<?php

/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 10:32 AM
 */
class math
{
    public function add(&$augend, &$addend){
        return (is_numeric($augend) and is_numeric($addend))? ($augend + $addend) : null;
    }

    public function subtract(&$minuend, &$subtrahend){
        return (is_numeric($minuend) and is_numeric($subtrahend)) ? $minuend - $subtrahend : null;
    }

    public function multiply(&$multiplicand, &$multiplier){
        return (is_numeric($multiplicand) and is_numeric($multiplier)) ? $multiplicand * $multiplier : null;
    }

    public function divide(&$dividend, &$divisor){
        return (is_numeric($dividend) and is_numeric($divisor) and $divisor != 0) ? $dividend / $divisor : null;
    }

}