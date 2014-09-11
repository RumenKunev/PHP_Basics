<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
    <p>Please, enter tags:</p><br>
    <form metod="get" action="">
        <input type="text" name="inputBox">
        <input type="submit" name="submit" value="SUBMIT">
    </form>

<?php
$inputArr = [];
if($_GET && isset($_GET['submit'])){
    $inputStr = $_GET['inputBox'];
    $inputArr = explode(', ', $inputStr);

    $result = [];
    //$c = array_count_values($tags); функцията за която става въпрос - връща масив
    foreach($inputArr as $tag){
        if(!isset($result[$tag])){
            $result[$tag] = 1;
        }else{
            $result[$tag]++;
        }
    }
    arsort($result);
    echo '<div>';
    foreach ($result as $key => $value) {
    echo $key . " : " . $value . " time" . ($value == 1 ? "" : "s") . "<br />";
    }
    $keys = array_keys($result);
    echo "Most frequent tag is: " . $keys[0];
    echo '</div>';
}
?>

</body>
</html>