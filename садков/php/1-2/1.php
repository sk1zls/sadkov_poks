<?
echo "
<html>
<body>
";
$first = "мама";
$second = "папа";
echo $second;
$second = &$first;

$first = $first;

echo "переменная с именем first равна " . $first . "<br>";
echo "переменная с именем second равна  " . $second;
echo "
</body>
</html>
";
?>