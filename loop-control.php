<?php
$numbers = range(0, 100, 3);
do {
    if($numbers[0] > 0 ){
        if ($numbers[0] % 7 === 0) {
            echo("Sevens are lucky, this number has ". ($numbers[0] / 7) . "\n");

            if ($numbers[0] === (3*7)){
                echo "First Number\n";
            } elseif ($numbers[0] === (intdiv(100,3*7)*3*7)) {
                echo "Last Number\n";
            }
        } elseif ($numbers[0] % 10 === 0) {
            echo("$numbers[0] is a round number\n");
            if ($numbers[0] === (3 * 10)) {
                echo "First Number\n";
            } elseif ($numbers[0] === (intdiv(100,3*10)*3*10)) {
                echo "Last Number\n";
            }
        }
    }
    array_shift($numbers);
} while (!empty($numbers));