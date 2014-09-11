<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<form method="post">

    <input type="text" name="tags" />
    <input type="submit" name="submit"><br/>
    <?php
    if ($_POST && isset($_POST["submit"])) {
        $tags = explode(", ", $_POST["tags"]);
        echo "<div>";
        foreach ($tags as $key => $value) {
            echo $key . " : " . $value . "<br />";
        }

        echo "</div>";
    }
    ?>
</form>
</body>
</html>