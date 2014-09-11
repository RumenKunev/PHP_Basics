<?php
$rows = 5;
$cols = 4;
$count = 1;
$matrix = [];
for ($r = 0; $r < $rows; $r++) {
    $matrix[$r] = [];
    for ($c = 0; $c < $cols; $c++) {
        $matrix[$r][$c] = $count++;
    }
}
echo json_encode($matrix);
?>

<table border="1">
<?php for ($row = 0; $row < count($matrix); $row++) : ?>
    <tr>
        <?php for ($col = 0; $col < count($matrix[$row]); $col++) : ?>
            <td><?= htmlspecialchars($matrix[$row][$col]) ?></td>
        <?php endfor ?>
    </tr>
<?php endfor ?>
</table>





<?php
$row = 10;
$col = 10;
for ($i = 0; $i < $row; $i += 1):?>
<table>
    <tr>
        <?php for ($c = 0; $c < $col; $c += 1): ?>
            <td><?= "$i $c" ?></td>
        <?php endfor; ?>
    </tr>
</table>
<?php endfor; ?>

