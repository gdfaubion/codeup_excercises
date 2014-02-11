<?php

function add($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";
	} else {
		echo "!!!ERROR!!! You have $a and $b, but both inputs must be numeric!\n";
	}
}

function subtract($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";
	} else {
		echo "!!!ERROR!!! You have $a and $b, but both inputs must be numeric!\n";
	}   
}

function multiply($a = 1, $b = 1) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";
	} else {
		echo "!!!ERROR!!! You have $a and $b, but both inputs must be numeric!\n";
	}   
}

function divide($a = 1, $b = 1) {
	if($a == 0 || $b == 0){
		echo "!!!Error!!! Cannot divide by 0!\n";

	}elseif(is_numeric($a) && is_numeric($b)) {
		echo $a / $b . "\n";
		
	} else {
		echo "!!!ERROR!!! You have $a and $b, but both inputs must be numeric!\n";
	}   
}

function modulus($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		echo "!!!ERROR!!! You have $a and $b, but both inputs must be numeric!\n";
	}
	
}


add(5);

subtract(35, 19);

multiply(7, 6);

divide(15, 0);

modulus(10, 'John');





?>