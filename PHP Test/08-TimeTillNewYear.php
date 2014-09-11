<?php
$today = getdate();
$newYear = mktime(0, 0, 0, 1, 1, $today['year'] + 1);
$diff = $newYear - $today[0];

if(date("I", $today[0]) > 0) {
    $diff -= 3600;
}

echo "Hours until new year : " . round($diff / 3600) . "\n";
echo "Minutes until new year : " . round($diff / 60) . "\n";
echo "Seconds until new year : $diff\n";
echo "Days:Hours:Minutes:Seconds " . round($diff / 86400) . ":" . date("H:i:s", $today[0]);


/*<?php
$currentDay = getdate();
$now = $currentDay[0];
$firstDayOfNewYear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$leftSeconds = $firstDayOfNewYear - $now;

$lastSundayOfMarch = strtotime("last Sunday of March");
$startSummerTime = mktime(3, 0, 0, 3, date('d', $lastSundayOfMarch), date('Y'));
$lastSundayOfOctober = strtotime("last Sunday of October");
$endSummerTime = mktime(3, 0, 0, 10, date('d', $lastSundayOfOctober), date('Y'));

if ($startSummerTime <= $now && $now <= $endSummerTime) {
    $leftSeconds -= 3600;
}

$leftMinutes = (int)($leftSeconds / 60);
$leftHours = (int)($leftSeconds / 3600);

$day = (int)($leftSeconds / (3600 * 24));
$hours = (int)(($leftSeconds % (3600 * 24)) / 3600);
$minutes = (int)(($leftSeconds % 3600) / 60);
$seconds = (int)(($leftSeconds % 3600) % 60);

echo "Hours until new year : $leftHours \n";
echo "Minutes until new year : $leftMinutes \n";
echo "Seconds until new year : $leftSeconds \n";
echo "$day:$hours:$minutes:$seconds";*/