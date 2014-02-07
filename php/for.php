<?php

fwrite(STDOUT, "Pick a starting number\n");

$start = intval(fgets(STDIN));
fwrite(STDOUT, "At what number should we stop\n");

$stop = intval(fgets(STDIN));

for ($i = $start; $i <= $stop; $i++) {
	echo "$i\n";
}
