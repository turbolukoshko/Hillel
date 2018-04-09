<?php
/**
* 
*/
class firstPart{
	
	/*
	1) Написать метод который выводит все положительные четные числа которые меньше заданного.
	*/

	public function evenNumber ($arr){
		$result = [];
		for ($i=0; $i < $arr ; $i++) { 
			if ($arr % 2 == 0) {
				$result[] = $i++;
			}
		}
		return $result;
	}

	/*
	2) Вывести определенное количество элементов  последовательности Фибоначчи.
	*/
	
	public function fibonacciNumbers($n)
	{
		if ($n < 2) {
			return $n;
		}

	    $arr = [0,1]; 
	    for ($i=1; $i < $n;$i++){
	        $arr[] = $arr[$i] + $arr[$i-1];
	    }
    	return $arr;
	}

}
$obj = new firstPart;
var_dump($obj->evenNumber(24));
echo '<br>';
var_dump($obj->fibonacciNumbers(12));
