<?php

function humanizedlist($array1, $string, $abc = true) {
	$array = explode(', ' , $string);
	if ($abc) {
		sort($array);
	}
  $last_item = array_pop($array);
	$return = implode($array1, $array);
	$return .= " and " . $last_item;
	return $return;
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = [];

$famousFakePhysicists = humanizedList(', ', $physicistsString);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
