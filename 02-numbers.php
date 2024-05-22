<?php

// Целое число (integer, int)
$intNumber = 10;

// Дробное число (float)
$floatNumber = 3;

// Математические операторы (+, -, *, /)
$sumResult = $intNumber + $floatNumber;
$subResult = $intNumber - $floatNumber;
$multiplyResult = $intNumber * $floatNumber;
$divisionResult = $intNumber / $floatNumber;

?>

<!doctype html>
<html lang="en">
<head>
    <title>Numbers</title>
</head>
<body>
    <p>
        <?php var_dump($intNumber) ?> <br />
        <?php var_dump($floatNumber) ?>
    </p>

    <p>
        $sumResult <?php var_dump($sumResult) ?><br />
        $subResult <?php var_dump($subResult) ?><br />
        $multiplyResult <?php var_dump($multiplyResult) ?><br />
        $divisionResult <?php var_dump($divisionResult) ?>
    </p>

    <p>
        Сумма чисел (<?= "$intNumber, $floatNumber" ?>): <?= $sumResult ?>
    </p>

    <p>
        Вычитание чисел (<?= "$intNumber, $floatNumber" ?>): <?= $subResult ?>
    </p>

    <p>
        Умножение чисел (<?= "$intNumber, $floatNumber" ?>): <?= $multiplyResult ?>
    </p>

    <p>
        Деление чисел (<?= "$intNumber, $floatNumber" ?>): <?= $divisionResult ?>
    </p>
</body>
</html>