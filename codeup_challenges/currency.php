<?php

function euros($dollars) {
	$result = $dollars * .73;
	return $result;

}

function pesos($dollars) {
	$result = $dollars * 13;
	return $result;
}

function pounds($dollars) {
	$result = $dollars * .60;
	return $result;
}

function get_input($input = FALSE) {
	$dollars = trim(fgets(STDIN));
		if ($input) {
			$dollars = strtoupper($dollars);
		}
	return $dollars;

}



	echo "Welcome to Convert Quick!" . PHP_EOL;

do {

	echo "Enter the amount you would like to convert in US Dollars: $ ";
	
	$amount = get_input();

	echo "What currency would you like to convert to? (E)uros, (P)esos, or (B)ritish pounds? You can press (Q) to quit." . PHP_EOL;
	
	$input = get_input(TRUE);
	
		if($input == 'E') {

		$result = euros($amount);
		echo "\$$amount is equivalent to $result euros." . PHP_EOL;

		} elseif($input == 'P') {

			$result = pesos($amount);
			echo "\$$amount is equivalent to $result pesos." . PHP_EOL;

		} elseif($input == 'B') {

			$result = pounds($amount);
			echo "\$$amount is equivalent to $result pounds." . PHP_EOL;

		}

} while ($input != 'Q');


echo "Thanks for converting with Convert Quick! Goodbye!" . PHP_EOL;











