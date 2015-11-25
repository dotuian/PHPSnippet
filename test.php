<?php

#echo date("Y-m-d") . PHP_EOL;


class A {
	public $a;
	public $b;

	function __construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}
}

$obj1 = new A(1,2);
$obj2 = new A(1,3);

if($obj1 == $obj2) {
	echo "OK" . PHP_EOL;
} else {
	echo "NG" . PHP_EOL;
}





function add(array $a,  $b){
	return count($a) + $b;
}

echo call_user_func('add', array(1,2), 10);


