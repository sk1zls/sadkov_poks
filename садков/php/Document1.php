<?php
$first = "Text";
echo "Text!";
$second = &$first; //Assigning the value of $first to $second by reference

$first = 'New text';

echo "переменная с именем first равна " . $first . "<br>";
echo "переменная с именем second равна  " . $second;


?>