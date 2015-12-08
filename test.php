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



echo PHP_EOL;

$count = 0 ;
echo str_pad(++$count, 3, '0', STR_PAD_LEFT);
echo PHP_EOL;



echo substr("abcdefg", -2) . PHP_EOL;


echo substr("0123456789abcdefghi", 0, 14) . PHP_EOL;

echo substr("0123", 0, 14) . PHP_EOL;



echo strpos("dotuian.yahoo.jp",".") . PHP_EOL;

$str = "test.x-dotuian.yahoo.jp";


echo substr($str, 0, strpos($str,".")) . PHP_EOL;


$a = "01";
echo $a + 1;
echo PHP_EOL;










