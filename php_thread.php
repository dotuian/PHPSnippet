<?php

class T1 extends Thread {
	public $name = null;
	public $value = 0;
	
	
	public function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	}
	
	public function run() {
		for($i =0 ; $i < $this->value; $i++) {
			echo $this->name . ' --->>> value : ' . $i . PHP_EOL; 
			sleep(1.5);
		}
	}
}	

for($i=0; $i < 5 ; $i++) {
	$threads[$i] = new T1('NAME_'. $i, $i);
	$threads[$i]->start();
}














