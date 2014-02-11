<?php

function error($err_msg = 'You have an error!' ) {
		echo "!!!ERROR!!! Both inputs must be numeric!\n";
	}

function add($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";
	} else {
		error();
	}
}

function subtract($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";
	} else {
		error();
	}   
}

function multiply($a = 1, $b = 1) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";
	} else {
		error();
	}   
}

function divide($a = 1, $b = 1) {
	if($a == 0 || $b == 0){
		echo "!!!Error!!! Cannot divide by 0!\n";

	}elseif(is_numeric($a) && is_numeric($b)) {
		echo $a / $b . "\n";
		
	} else {
		error();
	}   
}

function modulus($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		error();
	}
	
}


add(5, 9);

subtract('Sandy', 19);

multiply(7, 6);

divide(15, 0);

modulus(10, 'John');





?>