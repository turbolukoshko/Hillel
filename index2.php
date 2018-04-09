<?php
/**
* 
*/
class theSecondPart{

	/*
	3) найти в массиве число второе по величине.
	*/
	public function secondNumber($arr)
	{
		$max = $arr[0];
		$second = $arr[1];
		$n = count($arr);
		for ($i=1; $i < $n ; $i++) {
			if ($max < $arr[$i]) {
				$max = $arr[$i];
			}
		}
		//return $max;

		for ($i=1; $i < $n; $i++) { 
			if ($max > $arr[$i] && $second < $arr[$i]) {
				$second = $arr[$i];
			}
		}
		return $second;
	}

	/*4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.
	*/
	public function numberZ($arr)
	{
		$z = 3;
		$count = count($arr);
		for ($i=0; $i < $count; $i++) { 
			if ($z > $arr[$i]) {
				$arr[$i] = $z;
			}
		}
		return $arr;
	}

	/*
	5) Написать свою реализацию следующих функций php: array_sum.
	*/
	public function myArray_sum($s)
	{
		$sum = 0;
		foreach ($s as $value) {
			$sum = $sum + $value;
		}
		return $sum;
	}

	/*
	6) Написать свою реализацию следующих функций php: in_array.
	*/
	public function myIn_Array($a, $value)
	{
		foreach ($a as $elem) {
			if ($elem == $value) {
				return true;
			}
		}
		return false;
	}
}

$obj = new theSecondPart;
echo $obj->secondNumber([11,25,3,46,5,14]);
echo '<br>';
var_dump($obj->numberZ([1,2,3,4,5,1,2,3,4,5]));
echo '<br>';
var_dump($obj->myArray_sum([1,2,3,4,5]));
echo '<br>';
var_dump($obj->myIn_Array([1,2,3,22, 'foo', 'bar', 'baz'], 'foo'));
