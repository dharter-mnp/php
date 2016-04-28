<?php
$numbers = range(0, 100, 3);
foreach($numbers as $number) {
    if($number > 0 ){
        if ($number % 7 === 0) {
            echo("Sevens are lucky, this number has ". ($number / 7) . "\n");

            if ($number === (3*7)){
                echo "First Number\n";
            } elseif ($number === (intdiv(100,3*7)*3*7)) {
                echo "Last Number\n";
            }
        } elseif ($number % 10 === 0) {
            echo("$number is a round number\n");
            if ($number === (3 * 10)) {
                echo "First Number\n";
            } elseif ($number === (intdiv(100,3*10)*3*10)) {
                echo "Last Number\n";
            }
        }
    }
}