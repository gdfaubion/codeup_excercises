<?php
// pick random # between 1 - 100

$answer = rand(1, 100);

fwrite(STDOUT, 'Guess a number between 1 and 100 ');

$num_of_guesses = 0;

do {

	$number = fgets(STDIN);
	$num_of_guesses++;

	if ($number < $answer) {
		echo "HIGHER!\n";
		echo "Guess again \n";

		} elseif ($number > $answer) {
			echo "LOWER!\n";
			echo "Guess again \n";

		} else {
			echo "WINNER!\n";
		}

} while ($number != $answer);

echo "Great job!!\n";

echo "It took you $num_of_guesses guesses!\n";

exit();







