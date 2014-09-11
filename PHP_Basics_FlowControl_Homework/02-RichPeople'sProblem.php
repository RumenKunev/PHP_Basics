<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Car Randomizer</title>
    <link rel="stylesheet" href="02-RichPeople'sProblem.css">
</head>
<body>
    <form method="post" action="">
        Enter cars
        <input type="text" name="cars"/>
        <input type="submit" name="submit" value="Show result"/>
    </form>
    <?php
    if($_POST && isset($_POST['submit']) && !empty($_POST['cars'])):
        $inputStr = $_POST['cars'];
        $carsArr = preg_split('/[ ,]+/', $inputStr);
    ?>
    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Units</th>
        </tr>
    <?php foreach($carsArr as $car):
        $colorArr = ['yellow', 'black', 'blue', 'red', 'white'];
        $randColor = $colorArr[array_rand($colorArr)];
        $count = rand(1,5);
        ?>
        <tr>
            <td><?= $car ?></td>
            <td><?= $randColor ?></td>
            <td><?= $count ?></td>
        </tr>

            <?php endforeach; ?>
    </table>
    <?php endif; ?>

</body>
</html>
