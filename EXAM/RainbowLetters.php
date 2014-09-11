<?php
$word = $_GET['text'];
$red = $_GET['red'];
$green = $_GET['green'];
$blue = $_GET['blue'];
$letter = $_GET['nth'];


    $color = "#" . strtolower(str_pad(dechex($red), 2, '0')) .
        strtolower(str_pad(dechex($green), 2, '0')) .
        strtolower(str_pad(dechex($blue), 2, '0'));

    $style = "color: $color";
if(!strlen($word)<$letter && $word != ''){
echo "<p>";
    for ($i = 1; $i <= strlen($word); $i += 1){

        if($i % $letter == 0){

            echo "<span style=\"" . htmlspecialchars($style) . "\">" . htmlspecialchars($word[$i - 1]) ."</span>";
        }else{
            echo htmlspecialchars($word[$i-1]);
        }
    }
echo "</p>";
}