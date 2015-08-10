<?php
//create a class named Rectangle that contains
//the properties $height and $width
//a constructor to set the height and width on instantiation
class Rectangle
{
	public function __construct($height, $width){
		$this->height = $height;
		$this->width = $width;
	}
//a method named area() that returns the area based on the height and width.
	public function area(){
		return $this->height * $this->width;
	}
	//add perimeter method
	public function perimeter(){
		return $this->height * 2 + $this->width * 2;
	}
}
