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

setOrEmpty($nothing);
setOrEmpty($something);
setOrEmpty($array);