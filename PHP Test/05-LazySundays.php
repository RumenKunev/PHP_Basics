<?php
$currentMonth = date('m');
$currentYear = date('Y');
$totalDays = date('t');
for($i = 0; $i <= $totalDays; $i += 1){
    $currentDay = date('l', mktime(0,0,0,$currentMonth,$i,$currentYear));
    if($currentDay == 'Sunday'){
        echo date('jS F,Y', mktime(0,0,0,$currentMonth,$i,$currentYear)) . "\n";
    }
}



/*<?php
$currentMonth = date('m');
$timestampSunday = strtotime("first Sunday of this month");

do {
    $sundayDate = date('jS F, Y', $timestampSunday);
    echo $sundayDate . "\n";
    $timestampSunday += 7 * 24 * 60 * 60;
} while ($currentMonth == date('m', $timestampSunday));*/