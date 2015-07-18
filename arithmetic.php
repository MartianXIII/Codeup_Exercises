<?php
//Mars Martian
function add($a, $b) {
  $a = 11;
  $b = g;
    if (is_numeric($a) && is_numeric($b)) {
    return ($a + $b) . "\n";
} else {
      return "ERROR: {$a} && {$b} arguments must be numbers\n";
  }
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b))
    return ($a - $b) . "\n";
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b))
    return ($a * $b) . "\n";
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b))
    return ($a / $b) . "\n";
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b))
    return ($a % $b) . "\n";
}

// uses print_r or var_dump on an array
function inspect($variable = null, $dump = true) {
    // Same as if ($dump == true) {...}
    if ($dump) {
        var_dump($variable);
    } else {
        print_r($variable);
    }
}

$c = 10;
$d = 2;

echo add($c, $d);
echo subtract($c, $d);
echo multiply($c, $d);
echo divide($c, $d);
echo modulus($c, $d);
