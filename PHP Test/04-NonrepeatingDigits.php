<?php
$num = 1234;
$result = [];


for($i=100; $i<=$num; $i+=1){
    if($i>999){
        break;
    }
    $str = (string)$i;
    if($str[0] != $str[1] && $str[0] != $str[2] && $str[1] != $str[2]){
    array_push($result, $i);
    }
    }
if(count($result) == 0){
    echo 'no';
}
else{
    echo implode(',',$result) ;
}
