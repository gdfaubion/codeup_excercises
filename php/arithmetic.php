<?php

function paramsAreValid($a, $b) {
	return (is_numeric($a) && is_numeric($b));
}

function add($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a + $b;
	} else {
		return 0;
	}
}

function subtract($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a - $b;
	} else {
		return 0;
	}
}

function multiply($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a * $b;
	} else {
		return 0;
	}	
}

function divide($a, $b) {
	if (paramsAreValid($a, $b)) {
		if ($b != 0) {
			return $a / $b;
		} else {
			return 0;
		}
	}		
}

function modulus($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a % $b;
	} else {
		return 0;
	}
}

add(20, 5);
subtract(10, 2);
multiply(9, 5);
divide(20, 2);
modulus(30, 3);

?>