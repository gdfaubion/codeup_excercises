<?php
// pick random # between 1 - 100

$answer = mt_rand(1, 100);

fwrite(STDOUT, 'Guess a number between 1 and 100 ');


do {

	$number = fgets(STDIN);

	if ($number < $answer) {
		echo "HIGHER!";
		echo "Guess again ";

		} elseif ($number > $answer) {
			echo "LOWER!";
			echo "Guess again ";

		} else {
			echo "WINNER!";
		}

} while ($number !== $answer);







