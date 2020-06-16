<?php
use Carbon\Carbon;
date_default_timezone_set('Asia/Kolkata');
$dt = Carbon::now()->toDateTimeString();
// dd($dt);
$date = substr($dt, 0,10);
return [
	'time' => $dt, 'date' =>$date
];