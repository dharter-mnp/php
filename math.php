<?php

/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 10:32 AM
 */
class math
{
    public function add($augend, $addend, ...$values){
        $result = $augend + $addend;
        foreach ($values as $value) {
            $result += $value;
        }
        return $result;
    }

    public function subtract($minuend, $subtrahend, ...$values){
        $result = $minuend - $subtrahend;
        foreach ($values as $value) {
            $result -= $value;
        }
        return $result;
    }

    public function multiply($multiplicand, $multiplier, ...$values){
        $result = (int)$multiplicand * (int)$multiplier;
        foreach ($values as $value) {
            $result *= (int)$value;
        }
        return$result;
    }

    public function divide($dividend, $divisor, ...$values){
        $result = $dividend / $divisor;
        foreach ($values as $value) {
            $result /= $value;
        }
        return $result;
    }
}
