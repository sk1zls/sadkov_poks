<?php
// Константа - подпись
define('SIGNATURE', 'С уважением, Вася.');

// Массив событий и получателей
$events = array(
    'День рождения' => 'Иван Иванов',
    'Свадьба' => 'Мария Петрова',
    'Выставка' => 'Александр Сидоров'
);

// Выбор случайного элемента из массива
$randomKey = array_rand($events);
$event = $randomKey;
$recipient = $events[$randomKey];

// Формирование обращения
$greeting = 'Уважаемый(ая) ' . $recipient . ',';

// Формирование текста письма
$message = 'Приглашаем вас на ' . $event;

// Полное письмо
$letter = $greeting . "\n" . $message . "\n" . SIGNATURE;

// Вывод письма
echo $letter;
?>