<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function checks if $names or $compare are arrays
// Then searches through arrays
function search_arrays($keys, $array = FALSE) {

	if (is_array($array)) {
		return array_search($keys, $array);
	} else {
		return FALSE;
	}
	

}

$result = search_arrays('Tina', $names);

echo var_dump($result);

$result = search_arrays('Bob', $names);

echo var_dump($result);


function match($needles, $haystack = FALSE) {

	$num_matches = 0;

	foreach ($needles as $needle) {
		$result = array_search($needle, $haystack);

		if(is_numeric($result)) {
			$num_matches++;
		}

	}
		return $num_matches;
}


$result = match($compare, $names);

echo $result . PHP_EOL;

var_dump($result);








