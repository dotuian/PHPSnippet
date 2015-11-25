<?php
#array_map — 将回调函数作用到给定数组的单元上
#array array_map( callable $callback , array $arr1 [, array $... ] )

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

$new_array = array_map(function($value){
	#echo  $value . PHP_EOL;
	#对数组中每个月元素的值+10
	return $value + 10;
}, $array);
print_r($new_array);


$func = function($value) {
	return $value + 10 ;
};
$new_array = array_map($func, $array);
print_r($new_array);


function plus10($value){
	return $value + 10;
}
$new_array = array_map("plus10", $array);
print_r($new_array);


