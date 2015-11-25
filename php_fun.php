<?php

$a = 1;
$b = 2;

function sum(){
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
sum();

//echo $b;

function test() {
	static $count = 0 ;
	
	$count ++;
	echo $count . PHP_EOL;
	if($count < 10) {
		test();
	}
}

//test();

class TC {
	public static $a = 0;
	public function ReturnVar() {
		return self::$a;
	}
}
$b = new TC();
//echo $b->ReturnVar() . PHP_EOL;

$oldValue = [1,2,3];
$newValue = [10,20,30];

//echo sprintf("修正前：\r\n%s\r\n修正後：\r\n%s", print_r($oldValue, true), print_r($newValue, true));
//echo PHP_EOL;


class T {
	public $a;
	public $b;
}

$t = new T();
$t->a = 1;
$t->b = 2;
//print_r($t);
//print_r(get_class($t));






function detailAction($oldValue, $newValue) {
	if (!is_array($oldValue) && !is_array($newValue)) {
		return null;
	}

	$diff = array();
	foreach ($newValue as $key => $value) {
		if (array_key_exists($key, $oldValue)) {
			// 両方値は違う場合
			if ($oldValue[$key] != $value) {
				$diff[$key]['old'] = $oldValue[$key];
				$diff[$key]['new'] = $value;
			}
		} else {
			// 新しく追加された項目
			$diff[$key]['old'] = '---';
			$diff[$key]['new'] = $value;
		}
	}

	// 削除された項目
	foreach ($oldValue as $key => $value) {
		if (!array_key_exists($key, $newValue)) {
			$diff[$key]['old'] = $value;
			$diff[$key]['new'] = '---';
		}
	}
	
	return print_r($diff, true);
	
	return sprintf("変更前：\n%s \n変更後：\n%s", print_r($oldValue, true), print_r($newValue, true));
}













