﻿<?php
// Объявление переменных с разными типами
$var1 = "Hello"; // Строка
$var2 = 123; // Целое число
$var3 = 3.14; // Число с плавающей запятой
$var4 = true; // Логическое значение

// Получение типа каждой переменной с помощью функции gettype()
$type1 = gettype($var1);
$type2 = gettype($var2);
$type3 = gettype($var3);
$type4 = gettype($var4);

// Вывод типов переменных на экран
echo "Тип переменной \$var1: " . $type1 . "<br>";
echo "Тип переменной \$var2: " . $type2 . "<br>";
echo "Тип переменной \$var3: " . $type3 . "<br>";
echo "Тип переменной \$var4: " . $type4 . "<br>";
?>