<?php
$text = $_GET['list'];
$min = $_GET['minPrice'];
$max = $_GET['maxPrice'];
$filter = $_GET['filter'];
$order = $_GET['order'];

$result = [];
$id = 1;

$pattern = '/[|\n\r]+/';
$untrimedMatches = preg_split($pattern,$text,-1,PREG_SPLIT_NO_EMPTY);
$matches = [];
foreach ($untrimedMatches as $match) {
    if($match !== " "){
        $matches[] = trim($match);
    }
}

for ($i = 0; $i < count($matches); $i += 4){
    if($filter === 'all' || $matches[$i+1] === $filter){
        if($matches[$i+3] >= $min && $matches[$i+3] <= $max){
            $name = $matches[$i];
            $components = explode(', ',$matches[$i+2]);
            $price = (float)$matches[$i+3];
            $result[] = [$id, $name, $components, $price];
        }
    }
    $id++;
}

usort($result, function($p1, $p2) use ($order) {
    if ($p1[3] == $p2[3]) {
        return $p1[0] - $p2[0];
    }
    return ($order == "ascending" ^ $p1[3] > $p2[3]) ? -1 : 1;
});
$output = '';
foreach ($result as $prod) {
    $id = $prod[0];
    $output .= "<div class=\"product\" id=\"product" . "$id" . "\">" . "<h2>" . htmlspecialchars($prod[1]) . "</h2>" .
        "<ul>" .
        "<li class=\"component\">" . htmlspecialchars($prod[2][0]) ."</li>" .
        "<li class=\"component\">" . htmlspecialchars($prod[2][1]) ."</li>" .
        "<li class=\"component\">" . htmlspecialchars($prod[2][2]) ."</li>" .
        "</ul>" .
        "<span class=\"price\">" . number_format(htmlspecialchars($prod[3]), 2, '.','') . "</span>" .
        "</div>";
}

echo $output;