<?php


for($bottles = 99; $bottles >= 0; $bottles--) {
	$bottles2 = $bottles - 1;
		if($bottles == 1) {
			echo "$bottles bottle of beer on the wall, $bottles bottle of beer! Take one down and pass it around, no more bottles of beer on the wall!" . PHP_EOL;
		} elseif ($bottles == 2) {
			echo "$bottles bottles of beer on the wall, $bottles bottles of beer! Take one down pass it around, $bottles2 bottle of beer on the wall!" . PHP_EOL;
		} elseif($bottles == 0) {
			echo "No more bottles of beer on the wall, no more bottles of beer! Go to the store and buy some more, 99 bottles of beer on the wall!" . PHP_EOL;
		} else {
			echo "$bottles bottles of beer on the wall, $bottles bottles of beer! Take one down pass it around, $bottles2 bottles of beer on the wall!" . PHP_EOL;
		}

	}
?>