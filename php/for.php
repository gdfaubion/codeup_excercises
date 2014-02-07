<?php

fwrite(STDOUT, "Pick a starting number\n");

$start = intval(fgets(STDIN));

fwrite(STDOUT, "At what number should we stop\n");

$stop = intval(fgets(STDIN));

fwrite(STDOUT, "What would you like to count by?\n");

$increment_by = intval(fgets(STDIN));

echo "Great! Lets count!";

for ($i = $start; $i <= $stop; $i += $increment_by) {
	echo "$i\n";
}
