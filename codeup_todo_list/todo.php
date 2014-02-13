<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($list) {
    $return = '';
    foreach ($list as $key => $value) {
        $return .= "[" . ($key + 1) . "] " . $value . PHP_EOL;
    } 
        return $return;
    }

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    $input = trim(fgets(STDIN));
    if ($upper) {
        $input = strtoupper($input);
    }
    return $input;
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort from A-Z, (Z)Sort from Z-A, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
        if(count($items) > 1) {
            echo "Would you like to add this item to the (B)eggining or (E)nd of your list?\n";
            $input = get_input(TRUE);
        }elseif($input == 'B') {
            array_unshift($items, $input);
        } elseif($input == 'E') {
            array_push($itmes, $input);
            }
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
    } elseif ($input == 'S') {
        //sort $items from A-Z
        sort($items);
    } elseif ($input == 'Z') {
        //sort from Z-A
        rsort($items);
    }  elseif ($input == 'F') {
        array_shift($items);
    } elseif ($input == 'L') {
        array_pop($itmes);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);