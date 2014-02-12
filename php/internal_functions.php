<?php

$nothing = NULL;
$something = '';
$array = array(1, 2, 3);

function setOrEmpty($var) {
	if(isset($var)) {
		echo "\$var is set\n";
	} elseif (empty($var)) {
		echo "\$var is empty\n";
	}
}

if(empty($nothing)) {
	echo "\$nothing is empty\n";
} elseif(isset($nothing)) {
	echo "\$nothing is set\n";
}

if(isset($something)) {
	echo "\$something is set\n";
}

 setOrEmpty($array);