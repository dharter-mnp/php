<?php

/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 10:32 AM
 */
class math
{
    const ADD = "Add";
    const SUBTRACT = "Subtract";
    const MULTIPLY = "Multiply";
    const DIVIDE = "Divide";
    
    private function doOperation($operation, $value1, $value2, $values){
        switch ($operation){
            case (self::ADD):
                $result = $value1 + $value2;
                foreach ($values as $value) {
                    $result += $value;
                }
                return $result;
                break;
            case self::SUBTRACT:
                $result = $value1 - $value2;
                foreach ($values as $value) {
                    $result -= $value;
                }
                return $result;
                break;
            case self::MULTIPLY:
                $result = (int)$value1 * (int)$value2;
                foreach ($values as $value) {
                    $result *= (int)$value;
                }
                return$result;
                break;
            case self::DIVIDE:
                $result = $value1 / $value2;
                foreach ($values as $value) {
                    $result /= $value;
                }
                return $result;
                break;
                    }
        
    }
    
    public function add($augend, $addend, ...$values){
        return $this->doOperation(self::ADD, $augend, $addend, $values);
    }

    public function subtract($minuend, $subtrahend, ...$values){
        return $this->doOperation(self::SUBTRACT, $minuend, $subtrahend, $values);
    }

    public function multiply($multiplicand, $multiplier, ...$values){
        return $this->doOperation(self::MULTIPLY, $multiplicand, $multiplier, $values);
    }

    public function divide($dividend, $divisor, ...$values){
        return $this->doOperation(self::DIVIDE, $dividend, $divisor, $values);
    }
}
