<?php 

// setup two string to swap
$data0 = 'swap';
$data1 = 'me';

echo $data0 . ' / ' . $data1 . "<br/>";

// setup method and passing reference on it
function swap(&$data0, &$data1)
{
    // swap
    $data0 = var_export($data1, $data1 = explode(',', "$data0,$data1")[0]);
    
    // remove trailing characters
    $data0 = is_string($data0) ? trim($data0, '\'') : $data0;
}

// begin swapping
swap($data0, $data1);

// display the result
echo "swapped<br/>" . $data0  . ' / ' . $data1;
