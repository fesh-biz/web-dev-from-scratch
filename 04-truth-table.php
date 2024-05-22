<?php

$true = true;
$false = false;

?>

<!doctype html>
<html lang="en">
<head>
    <title>Truth Table</title>
</head>
<body>

    <p>
        Логические операторы: || (ИЛИ), && (И) <br />
        $userRole = 'is_admin' <br />
        (5 > 5 || $userRole === 'is_admin') // true
    </p>

    <p>
        Таблица для условного оператор ||
    </p>
    <table>
        <tr>
            <td><?php var_dump($true); ?></td>
            <td>||</td>
            <td><?php var_dump($false); ?></td>
            <td>Результат: <?php var_dump($true || $false); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($false); ?></td>
            <td>||</td>
            <td><?php var_dump($true); ?></td>
            <td>Результат: <?php var_dump($false || $true); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($true); ?></td>
            <td>||</td>
            <td><?php var_dump($true); ?></td>
            <td>Результат: <?php var_dump($true || $true); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($false); ?></td>
            <td>||</td>
            <td><?php var_dump($false); ?></td>
            <td>Результат: <?php var_dump($false || $false); ?></td>
        </tr>
    </table>

    <p>
        Таблица для условного оператор &&
    </p>
    <table>
        <tr>
            <td><?php var_dump($true); ?></td>
            <td>&&</td>
            <td><?php var_dump($false); ?></td>
            <td>Результат: <?php var_dump($true && $false); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($false); ?></td>
            <td>&&</td>
            <td><?php var_dump($false); ?></td>
            <td>Результат: <?php var_dump($false && $false); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($false); ?></td>
            <td>&&</td>
            <td><?php var_dump($true); ?></td>
            <td>Результат: <?php var_dump($false && $true); ?></td>
        </tr>
        <tr>
            <td><?php var_dump($true); ?></td>
            <td>&&</td>
            <td><?php var_dump($true); ?></td>
            <td>Результат: <?php var_dump($true && $true); ?></td>
        </tr>
    </table>
</body>
</html>