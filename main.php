<?php
require_once ("constants.php");

$array =[TWO => ONE, THREE => 3, FOUR => FIVE];
$result = $array[TWO] * $array[FOUR] * $array[THREE];
printf("The result of %d * %d * %d is : %d", $array[TWO] , $array[FOUR] , $array[THREE], $result);