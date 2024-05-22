<?php

$numberFive = 5;
$numberSix = 6;
$numberSeven = 7;

?>


<!doctype html>
<html lang="en">
<head>
    <title>Boolean</title>
</head>
<body>
    <p>
        Логический тип данных может быть равен ТОЛЬКО одному из значений: <br />
        true (истина), false (ложь)
    </p>

    <p>
        Если в любом выражении присутствует хоть один логический оператор, <br />
        результатом такого выражения будет логическое значение (true, false)
    </p>

    <p>
        Логические оператор > (больше) <br />
        $numberFive > $numberSix:
        <?php
            $result = $numberFive > $numberSix;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор >= (больше ИЛИ равно) <br />
        $numberFive >= $numberSix:
        <?php
            $result = $numberFive >= $numberSix;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор >= (больше ИЛИ равно) <br />
        $numberFive >= 4 + 1:
        <?php
            $result = $numberFive >= 4 + 1;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор < (меньше) <br />
        $numberFive < $numberSix:
        <?php
            $result = $numberFive < $numberSix;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор <= (меньше ИЛИ равно) <br />
        $numberFive <= 3 + 2:
        <?php
            $result = $numberFive <= 3 + 2;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор == (неточное равенство) <br />
        $numberFive == 5:
        <?php
            $result = $numberFive == 5;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор == (неточное равенство) <br />
        Сравнение числа со строкой <br />
        $numberFive == '5':
        <?php
            $result = $numberFive == '5';
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор == (неточное равенство) <br />
        $numberFive == $numberSix:
        <?php
            $result = $numberFive == $numberSix;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор === (точное равенство) <br />
        $numberFive === $numberSix:
        <?php
            $result = $numberFive === $numberSix;
            var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор === (точное равенство) <br />
        Проверка на точное равенство числа со строкой <br />
        $numberFive === '5':
        <?php
        $result = $numberFive === '5';
        var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор != (неточное неравенство) <br />
        $numberFive != $numberSix:
        <?php
        $result = $numberFive != $numberSix;
        var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор != (неточное неравенство) <br />
        $numberFive != '5':
        <?php
        $result = $numberFive != '5';
        var_dump($result);
        ?>
    </p>

    <p>
        Логические оператор !== (точное неравенство) <br />
        $numberFive !== '5':
        <?php
        $result = $numberFive !== '5';
        var_dump($result);
        ?>
    </p>
</body>
</html>