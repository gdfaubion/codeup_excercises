<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function checks if $names or $compare are arrays
// Then searches through arrays
function search_arrays($keys, $array = FALSE) {
	$result = '';
	if (is_array($array)) {
		$result = in_array($keys, $array);
	}
		return $result;

}

$result = search_arrays('Tina', $names);

echo var_dump($result);

$result = search_arrays('Bob', $names);

echo var_dump($result);