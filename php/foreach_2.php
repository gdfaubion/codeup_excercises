<?php

$books = array(
	'The Hobbit' => array(
		'Published' => 1937,
		'Author' => 'J.R.R. Tolkien',
		'Pages' => 310
	),
	'Game of Thrones' => array(
		'Published' => 1996,
		'Author' => 'George R. R. Martin',
		'Pages' => 835
	),
	'The Catcher in the Rye' => array(
		'Published' => 1951,
		'Author' => 'J. D. Salinger',
		'Pages' => 220
	),
	'A Tale of Two Cities' => array(
		'Published' => 1859,
		'Author' => 'Charles Dickens',
		'Pages' => 544
	)

);

foreach ($books as $title => $book) {
	echo "$title\n";
	foreach ($book as $key => $value) {
		echo "$key $value\n"; 
	}

}
	
