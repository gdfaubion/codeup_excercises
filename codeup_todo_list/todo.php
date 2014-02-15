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

//Create function that opens and reads a file,
//returns the contents so we can add it the list of items
function open_file() {
    echo "Which file would you like to open?" . PHP_EOL;
    $file = get_input();
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    return $contents_array;   
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (A)sort from A-Z, (Z)Sort from Z-A, (O)pen file, (S)ave, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo "Would you like to add this item to the (B)eggining or (E)nd of your list?\n";
        $input = get_input(TRUE);
        if($input == 'B') {
            echo "Enter new item: ";
            $new_input = get_input();
            array_unshift($items, $new_input);
        } elseif($input == 'E') {
            echo "Enter new item: ";
            $new_input = get_input();
            array_push($items, $new_input);
        }
    }elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
    } elseif ($input == 'A') {
        //sort $items from A-Z
        sort($items);
    } elseif ($input == 'Z') {
        //sort from Z-A
        rsort($items);
    } elseif ($input == 'F') {
        //removes the first item from the list
        array_shift($items);
    } elseif ($input == 'L') {
        //removes the last item from the list
        array_pop($items);
    } elseif($input == 'O') {
        $file = open_file();
        foreach($file as $line) {
            if ($line != '') {
                $items[] = $line;
            }
        }
    } elseif($input == 'S') {
        $filename = "data/todo_list.txt";
        if(is_file($filename)) {
            echo "This file already exists would you like to continue? (Y)es or (N)o " . PHP_EOL;
            $input = get_input(TRUE);
                if($input = 'Y') {
                    $handle = fopen($filename, 'w');
                    foreach ($items as $item) {
                    fwrite($handle, PHP_EOL . $item);
                    }
                    fclose($handle);
                    echo "Your save was successful!" . PHP_EOL;
                    
                } elseif($input == 'N') {
                    return FALSE;
                }
        
        }
        
    }

}   // Exit when input is (Q)uit
    while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);