<?php
$unknown = 1.234;
if(is_numeric($unknown)){
    var_dump($unknown);
}
else{
    echo gettype($unknown);
}