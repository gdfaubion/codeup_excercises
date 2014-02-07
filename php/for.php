<?php

fwrite(STDOUT, "Pick a starting number\n");

$start = intval(fgets(STDIN));

fwrite(STDOUT, "At what number should we stop\n");

$stop = intval(fgets(STDIN));

fwrite(STDOUT, "What would you like to count by?\n");

$increment_by = intval(fgets(STDIN));

if($increment_by === 0) {

	$increment_by = 1;
}

echo "Great! Lets count!\n";

for ($i = $start; $i <= $stop; $i += $increment_by) {
	echo "$i\n";

}





