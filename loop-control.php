<?php
$numbers = range(0, 100, 3);
for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i] > 0 ){
        if ($numbers[$i] % 7 === 0) {
            echo("Sevens are lucky, this number has ". ($numbers[$i] / 7) . "\n");

            if ($numbers[$i] === (3*7)){
                echo "First Number\n";
            } elseif ($numbers[$i] === (intdiv(100,3*7)*3*7)) {
                echo "Last Number\n";
            }
        } elseif ($numbers[$i] % 10 === 0) {
            echo("$numbers[$i] is a round number\n");
            if ($numbers[$i] === (3 * 10)) {
                echo "First Number\n";
            } elseif ($numbers[$i] === (intdiv(100,3*10)*3*10)) {
                echo "Last Number\n";
            }
        }
    }
}