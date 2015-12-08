<?php
$time = time();
$lastdays = [];

# get the last days of the months
for($i = 0; $i < 24; $i++) {
	# the last day of current month
	$lastday = strtotime(date("Y-m-t", $time));
	# the first day of next month 
	$time = strtotime("tomorrow", $lastday);

	# the last days of the months
	$lastdays[$lastday] = date("Y-m-d", $lastday);
}

# get the first day of month by strtotime function
foreach ($lastdays as $key => $value) {
	$result[$value] = date("Y-m-d", strtotime("first day of next month", $key));
}

#output
print_r($result);
?>

D:\PHP\phptest>php strtotime.php
Array
(
    [2015-06-30] => 2015-07-01
    [2015-07-31] => 2015-08-01
    [2015-08-31] => 2015-09-01
    [2015-09-30] => 2015-10-01
    [2015-10-31] => 2015-11-01
    [2015-11-30] => 2015-12-01
    [2015-12-31] => 2016-01-01
    [2016-01-31] => 2016-02-01
    [2016-02-29] => 2016-03-01
    [2016-03-31] => 2016-04-01
    [2016-04-30] => 2016-05-01
    [2016-05-31] => 2016-06-01
    [2016-06-30] => 2016-07-01
    [2016-07-31] => 2016-08-01
    [2016-08-31] => 2016-09-01
    [2016-09-30] => 2016-10-01
    [2016-10-31] => 2016-11-01
    [2016-11-30] => 2016-12-01
    [2016-12-31] => 2017-01-01
    [2017-01-31] => 2017-02-01
    [2017-02-28] => 2017-03-01
    [2017-03-31] => 2017-04-01
    [2017-04-30] => 2017-05-01
    [2017-05-31] => 2017-06-01
)
