<?php

$time = time();
$date_time_now = date('d/m/y @ H:i:s',$time);
$date_time_modified = date('d/m/y @ H:i:s',strtotime('+ 1 week 2 hours 05 minutes 30 seconds '));

echo "The current date/time is ".$date_time_now."<br>"."The modified date/time is ".$date_time_modified;

?>