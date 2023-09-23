<?php
$array = array("php" => "PHP users guide", 12 => true);

$array["Book about Perl"] = ""; // Создаем элемент с неуказанным индексом

$array["lisp"] = 123456; // Добавляем пару "lisp" = 123456

unset($array[12]); // Удаляем элемент с ключом 12

$array = array_values($array); // Переиндексируем массив с помощью array_values

print_r($array); // Выводим массив на экран
?>