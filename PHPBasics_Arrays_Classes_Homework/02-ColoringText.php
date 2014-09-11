<?php
$text = "What a wonderful world!";

$text = str_split($text);
$text = array_filter($text);

for($i = 0; $i < count($text) ;$i++) {
    if(ord($text[$i]) % 2 == 0) {
        echo '<span style="color:red">' . $text[$i] . ' </span>';
    }
    else {
        echo '<span style="color:blue">' . $text[$i] . ' </span>';
    }
}
?>