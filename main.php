<?php
require_once ("constants.php");

$array =[TWO => ONE, THREE => 3, FOUR => FIVE];
$result = $array[TWO] * $array[FOUR] * $array[THREE];
printf("The result of " . $array[TWO] . " * " . $array[FOUR] . " * " . $array[THREE] . " is : " . $result);