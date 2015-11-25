<?php
#array_filter — 用回调函数过滤数组中的单元
#array array_filter ( array $input [, callable $callback = "" ] )
#依次将 input 数组中的每个值传递到 callback 函数。如果 callback 函数返回 TRUE，则 input 数组的当前值会被包含在返回的结果数组中。数组的键名保留不变。


$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

#将数组的值作为参数传递给回调函数
$value = array_filter($array, function($value){
	echo  $value .  PHP_EOL;
	return in_array($value, ['1', '2']);
});
print_r($value);


#将数组的key作为回调函数的参数
$value = array_filter($array, function($key){
	#echo $key . PHP_EOL;
	return in_array($key, ['1', '2']);
}, ARRAY_FILTER_USE_KEY);
print_r($value);


#将数组的value和key，都作为回调函数的参数
$value = array_filter($array, function($value, $key){
	#echo $key . '  ' .  $value .  PHP_EOL;
	return in_array($key, ['1', '2']);
}, ARRAY_FILTER_USE_BOTH);
print_r($value);



