<?php
  function inspect($value) {
  	$statement = gettype($value);
  	switch ($statement) {
  		case ("NULL"):
  			return 'The value is Null.' . PHP_EOL;
  		case ("array"):
  			if (empty($value)) {
  				return 'This is an empty array.' . PHP_EOL;
  			} else {
  				return 'This is an array.' . PHP_EOL;
  			}
  		case ("boolean"):
  			if ($value) {
  				return "This $statement is true." . PHP_EOL;
  			} else {
  				return "This $statement is false." . PHP_EOL;
  			}
  		case ("string"):
  			if (empty($value)) {
  				return "The string is empty" . PHP_EOL;
  			} else {
  				return "The $statement is $value" . PHP_EOL;
  			}
  		default:
  			return "The $statement is $value" . PHP_EOL;
  	}
  }

$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . inspect($num1) .PHP_EOL;

echo 'Inspecting $num2:' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . inspect($null) .PHP_EOL;

echo 'Inspecting $bool1:' . inspect($bool1) .PHP_EOL;

echo 'Inspecting $bool2:' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1:' . inspect($string1) .PHP_EOL;

echo 'Inspecting $string2:' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1:' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2:' . inspect($array2) . PHP_EOL;
