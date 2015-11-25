<?php

#https://github.com/true/php-punycode

require("./Punycode.php");

// Import Punycode
use True\Punycode;


$str = isset($_GET['domain']) ? $_GET['domain'] : '日本語.jp';
$Punycode = new Punycode();
$encode_str = $Punycode->encode($str);

#echo PHP_EOL;
#echo $Punycode->decode($encode_str);
#echo PHP_EOL;

?>
<html>
<head>
	<title></title>
</head>
<body>
	<b>https://github.com/true/php-punycode</b>
	<br/><br/>

	<form method="get">
		<input type="input" name="domain" value="<?= $str ?>" />
		<button type="submit">Submit</button>
	</form>
	
	<?= $encode_str ?>

</body>
</html>

