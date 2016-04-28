<?php
$numbers = range(0, 100, 3);

foreach($numbers as $number) {
    switch ($number) {
        case (3):
            echo "Three\n";
            break;
        case(9):
            echo str_repeat("Nine\n",3);
            break;
        case(15):
            echo str_repeat("Fifteen\n", 5);
            break;
    }
}