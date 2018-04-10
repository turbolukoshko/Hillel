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
	public function myFuncStrpos($arr, $val){
		$count = count($arr);
		$numStr = str_split($arr);

		for ($i=0; $i < $count; $i++) { 
			if ($i == $val) {
				return $val;
			}
		}
	}
}

$obj = new theThirdPart;
$str = 'abc';
var_dump($obj->myFuncStrpos($str, 'a'));