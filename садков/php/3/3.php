<?php
$names = array("Алексей", "Мария", "Дмитрий", "Екатерина");
$checkName = $names[array_rand($names)];

switch ($checkName) {
    case $names[0]:
        echo "Привет, Алексей! ";
        break;
    case $names[1]:
        echo "Привет, Мария! ";
        break;
    case $names[2]:
        echo "Привет, Дмитрий! ";
        break;
    case $names[3]:
        echo "Привет, Екатерина! ";
        break;
    default:
        echo "А ты кто такой? ";
        break;
}
?>