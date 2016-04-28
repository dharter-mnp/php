<?php
require_once ("constants.php");

$array =[TWO => ONE, THREE => 3, FOUR => FIVE];
$result = $array[TWO] * $array[FOUR] * $array[THREE];
printf("The result of " . $array[TWO] . " * " . $array[FOUR] . " * " . $array[THREE] . " is : " . $result);
echo "\n";
$country1 = 'Vokalia';
$country2 = 'Consonantia';
$town = 'Bookmarksgrove';
$ocean = 'Semantics';
$river = 'Duden';

$string = 'Far far away, behind the word mountains, far from the countries %s and %s, there live the blind texts. Separated they live in %s right at the coast of the %s, a large language ocean. A small river named %s flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.

Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.

When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.';

printf ($string, $country1, $country2, $town, $ocean, $river);