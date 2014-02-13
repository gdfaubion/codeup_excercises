<?php
// Converts array into list n1, n2, ..., and n3
function humanized_list($input, $sort = FALSE) {
  // Your solution goes here!
	$exploded = explode(', ', $input);
	if($sort = TRUE) {
		sort($exploded);
	} 
	$last = array_pop($exploded);
	return $imploded = implode(', ', $exploded) . ", and $last";
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, TRUE);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>