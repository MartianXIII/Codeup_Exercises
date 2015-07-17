<?php
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
$result = array_search('Dana', $names);
//Create a function that returns TRUE or FALSE
//if an array value is found. Search for Tina and Bob
//in $names. Make sure it works as expected.
function isInArray($array, $value) {
	return in_array($value, $array);
}

function compare($array1, $array2) {
	$count = 0;
	foreach ($array1 as $key => $value) {
		if(is_numeric(array_search($value, $array2))) {
		$count++;
		}
	}
		return $count;

//var_dump($count);
//var_dump($compare);
}

if ($result) {
	echo $names[$result];
	var_dump($result);
}

var_dump(isInArray($names, 'Tina'));
var_dump(isInArray($names, 'Bob'));
var_dump(compare($names, $compare)) . PHP_EOL;
echo (compare($names, $compare)) . PHP_EOL;
//var_dump($array1 . $array2);
