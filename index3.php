<?php

/**
* 
*/
class theThirdPart
{
	/*
	Задачи по строкам:
	10) Написать свою реализацию следующих функций php: strpos.
	*/
	public function myStrpos($str, $find) {
	$split = str_split($str); // Преобразует строку в массив
	for ($i=0; $i < $split ; $i++) { 
		if ($split[$i] === $find) {
			return $i;
		}
	}
}
}

$obj = new theThirdPart;
$str = 'abc';
$find = 'b';
var_dump($obj->myStrpos($str, $find));