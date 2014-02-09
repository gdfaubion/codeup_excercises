<?php
// Print the #'s 1 - 100
//if % by 3 echo Fizz
//if % by 5 echo Buzz
//if % by both 3 & 5 echo FizzBuzz
for ($i = 1; $i <= 100; $i++) {

	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz\n";

		} elseif ($i % 3 == 0) {
			echo "Fizz\n";

			} elseif ($i % 5 == 0) {
				echo "Buzz\n";

				} else {
					echo "$i\n";
			}
}