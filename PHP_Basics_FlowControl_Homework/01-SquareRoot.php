<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SquareRootSum</title>
<link rel="stylesheet" href="01-SquareRoot.css">
</head>
<body>
<table style="border: 1px solid black">
    <tr>
        <td>Number</td>
        <td>Square</td>
        <?php
        $sum = 0;
        for ($i = 0; $i <= 100; $i += 2):
        $square = sqrt($i);
        $sum += $square;?>
        <tr>
            <td><?= $i?></td>
            <td><?= round($square, 2)?></td>
        </tr>
        <?php endfor ?>
    </tr>
    <tr>
        <td>Total:</td>
        <td><?= round($sum, 2)?></td>
    </tr>
</table>

</body>
</html>
