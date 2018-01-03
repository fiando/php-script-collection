<?php

$datetime1 = $_POST['date1'];
$datetime2 = $_POST['date2'];

// uncomment line below to see example without form
// $datetime1 = "2007-09-01 04:10:58";
// $datetime2 = "2012-09-11 10:25:00";

$start_date = new DateTime($datetime1);
$since_start = $start_date->diff(new DateTime($datetime2));

echo $since_start->days.' days total<br>';
echo $since_start->y.' years<br>';
echo $since_start->m.' months<br>';
echo $since_start->d.' days<br>';
echo $since_start->h.' hours<br>';
echo $since_start->i.' minutes<br>';
echo $since_start->s.' seconds<br>';
