<?php
//Mars Martian
function add($a, $b) {
    return ($a + $b) . "\n";
}

function subtract($a, $b) {
    return ($a - $b) . "\n";
}

function multiply($a, $b) {
    return ($a * $b) . "\n";
}

function divide($a, $b) {
    return ($a / $b) . "\n";
}

function modulus($a, $b) {
    return ($a % $b) . "\n";
}

$c = 10;
$d = 2;

echo add($c, $d);
echo subtract($c, $d);
echo multiply($c, $d);
echo divide($c, $d);
echo modulus($c, $d);
