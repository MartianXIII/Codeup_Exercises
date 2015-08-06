<?php
//create a new file named square.php
//create class Sq that extends register_tick_function
class Square extends Rectangle
{
	public function __construct($sideLength){
		parent::__construct($sideLength, $sideLength);
	}
	//create a mehod perimeter which returns perimeter
	public function perimeter(){
		return $this->height * 4;
	}
}
