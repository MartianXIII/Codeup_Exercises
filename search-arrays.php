<?php
// Function returning Truthness if Value is found
//  Search Tina and Bob in $names, is it works as expected.
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
function searchThis($query, $array){
    $result = array_search($query, $array);
    if ($result !== false) {
        return true;
    } else {
        return false;
    }
}
var_dump(searchThis('Tina', $names)) . PHP_EOL;
var_dump(searchThis('Bob', $names)) . PHP_EOL;

// Create a function to compare 2 arrays that returns the number of values
// in common between the arrays. Use the 2 example arrays and
// make sure your solution uses array_search().
function compareThis($ar1, $ar2){
    foreach ($ar1 as $key => $value) {
        $result = array_search($value, $ar2);
        if ($result !== false) {
            $commonVariables += 1;
        }
    }
    return $commonVariables;
}
var_dump(compareThis($names, $compare));
