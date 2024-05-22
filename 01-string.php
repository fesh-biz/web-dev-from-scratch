<?php

$firstName = 'Hulk';
$lastName = 'Incredible';
$fullName = $firstName . ' ' . $lastName;

$fullNameInSingleQuotes = '$firstName $lastName';

$fullNameInDoubleQuotes = "$firstName $lastName";

// Джон Голт, Атлант Расправил Плечи, Айн Рэнд (Алиса Розенбаум)
// $characterName, $characterSurname
$characterName = 'Джон';
$characterSurname = 'Голт';
$bookTitle = 'Атлант Расправил Плечи';
$author = 'Айн Рэнд (Алиса Розенбаум)';
?>

<!doctype html>
<html lang="en">
<head>
    <title>String</title>
</head>
<body>
    <p>Hello, <?= $fullName ?>!</p>

    <p>Full Name In Single Quotes <?= $fullNameInSingleQuotes ?></p>

    <p>Full Name In Double Quotes <?= $fullNameInDoubleQuotes ?></p>

    <!-- Вывод строки при помощи одинарных кавычек и конкатенации
        Автор кинги Атлант Расправил Плечи - Айн Рэнд (Алиса Розенбаум)
    -->
    <p>Автор книги: <?= $bookTitle . ' - ' . $author ?></p>

    <!-- Вывод строки в двойных кавычках
        Герой книги Джон Голт
    -->
    <p>Герой книги <?= "$characterName $characterSurname" ?></p>
</body>
</html>
