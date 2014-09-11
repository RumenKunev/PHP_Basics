<?php
if(isset($_GET['errorLog']) && !empty($_GET['errorLog'])){
    $text = $_GET['errorLog'];
$exeptionNames = [];
$metods = [];
$fileNames = [];
$lines = [];
$pattern = '/\.[A-Z]+.*/';
$arr = preg_match_all($pattern,$text,$matches);
for ($i = 0; $i < count($matches[0]); $i += 1){
$exeptionArr = preg_split('/[.: ]+/',$matches[0][$i], -1, PREG_SPLIT_NO_EMPTY);

array_push($exeptionNames,$exeptionArr[0]);
}
$pattern2 = '/at\s+[A-Za-z\S+]+/';
$arr2 = preg_match_all($pattern2,$text,$matches2);
array_splice($matches2[0],1,1);

for ($k = 0; $k < count($matches2[0]); $k += 3){
$tokenGroups = preg_split('/[:)(]+/',$matches2[0][$k], -1, PREG_SPLIT_NO_EMPTY);

$metodArr = explode('.',$tokenGroups[0]);

array_push($metods,$metodArr[1]);
array_push($fileNames,$tokenGroups[1]);
array_push($lines, $tokenGroups[2]);
}
echo "<ul>";
for ($token = 0; $token < count($exeptionNames); $token += 1){
echo "<li>line <strong>" . htmlspecialchars($lines[$token]) . "</strong>" .
    " - <strong>" . htmlspecialchars($exeptionNames[$token]) . "</strong>" .
    " in <em>" . htmlspecialchars($fileNames[$token]) . ":" . htmlspecialchars($metods[$token]) .
    "</em></li>";
}
echo "</ul>";


}