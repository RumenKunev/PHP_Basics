<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Annual Expences</title>
    <link rel="stylesheet" href="03-annualExpences.css">
</head>
<body>
<form method="post" action="">
    Enter number of years:
    <input type="text" name="numberYears"/>
    <input type="submit" name="submit" value="Show Cost"/>
</form>
<?php
if($_POST && isset($_POST['submit']) && !empty($_POST['numberYears'])):
$numberOfYears = $_POST['numberYears'];
?>
    <table>
        <tr>
            <th>Yers</th>
            <th>Jan</th>
            <th>Feb</th>
            <th>Mar</th>
            <th>Apr</th>
            <th>Total</th>
        </tr>
        <?php
            for ($i = 0; $i < $numberOfYears ; $i += 1):
            $year = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y")-$i));?>
        <tr>
            <td><?= $year ?></td>
            <?php
            $total = 0;
            for ($k = 0; $k < 4; $k += 1):
            $expenses = rand(0,999);
            $total += $expenses
            ?>
            <td><?= $expenses ?></td>
            <?php endfor; ?>
            <td><?= $total ?></td>
        </tr>
        <?php endfor; ?>

    </table>
<?php endif; ?>
</body>
</html>
