<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Text Filter</title>
    <style type="text/css">
        .error {
            color: #ff0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="text">Text: </label>
    <textarea name="text" id="text" rows="4" cols="50"></textarea><br/>
    <label for="banList">Ban list: </label>
    <input type="text" name="banList" id="banList"/><br/>
    <input type="submit" value="Filter"/>
</form>
<br/>
<?php
if (isset($_POST["text"]) && isset($_POST["banList"])) {
    if (!empty($_POST["text"]) && !empty($_POST["banList"])) {
        $text = $_POST["text"];
        $bannedWords = preg_split('/[,\s+]+/', $_POST["banList"], -1, PREG_SPLIT_NO_EMPTY);
        foreach ($bannedWords as $bannedWord) {
            $text = preg_replace_callback('/' . $bannedWord . '/', function ($elements) {
                $length = mb_strlen($elements[0]);
                return str_repeat("*", $length);
            }, $text);
        }

        echo $text;
    } else {
        echo "<div class=\"error\">Not all fields have been filled in.</div>";
    }
}
?>
</body>
</html>


<?php
/*$text = "It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux!
Sincerely, a Windows client";

$banlist = array('Linux', 'Windows');

foreach ($banlist as $forb) {
    $text = str_replace($forb, str_repeat('*', strlen($forb)), $text);
}

echo $text;
*/?>