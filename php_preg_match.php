<?php
$pattern = "/[a-z0-9]/";
$subject = "dotuian.com";


for($i=0; $i<strlen($subject); $i++) {
	//$char = substr($subject, $i, 1);
	$char = $subject[$i];
	if(preg_match($pattern, $char)) {
		echo $char . " is OK";
	} else {
		echo $char . " is NG";
	}
	echo PHP_EOL;
}


preg_match($pattern, $subject, $matches);
echo print_r($matches, true);
	echo PHP_EOL;


$domain_name = "mail.dotuian-art.com";
$domain_name = str_replace(array('.', '-'), '_', $domain_name);
echo $domain_name ;
echo PHP_EOL;


?>