<?php
$arr = [
    "Gosho" => 3.55,
    "Mimi" => 6.00,
    "Pesho" => [3.00, 3.5],
    "Zazi" => [5.00, 5.20]
];

uasort($arr, function($a,$b){
    $first = is_array($a) ? max($a) : $a;
    $second = is_array($b) ? max($b) : $b;
    return $first - $second;
});
echo json_encode($arr);