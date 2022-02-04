<?php

echo "1. Доступ по ссылке: ";

$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;

$order .= " with the spicy sauce";

echo "\nYour order is: $very_bad_unclear_name.\n";

echo "\n2. Числа:\n";

$a = 123;

echo $a . "\n";

$b = 321;

echo $b . "\n";

$c = 0.123;

echo $c . "\n";

echo 12 . "\n";

$last_month = 1187.23;

$this_month = 1089.98;

echo ($last_month - $this_month) . "\n";

echo "\n11. Умножение и деление:\n";

$num_languages = 4;

$months = 11;

$days = $months * 16;

$days_per_language = $days / $num_languages;

echo $days_per_language . "\n";

echo "\n12. Степень:\n";

echo 8 ** 2 . "\n";

echo "\n13. Операторы присвоения:\n";

$my_num = 1;

$answer = $my_num;

$answer += 2;

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num;

echo $answer . "\n";

echo "\n14. Математические функции:\n";

echo "\nРабота с %:\n";

$a = 10;

$b = 3;

echo $a % $b . "\n";

if ($a % $b === 0)
{
	echo "Делится:" . $a / $b . "\n";
}
else
{
	echo "Делится с остатком: " . $a % $b . "\n";
}

echo "\nРабота со степенью и корнем:\n";

$st = pow(2, 10);

echo $st . "\n";

echo sqrt(245) . "\n";

$array = [4, 2, 5, 19, 13, 0, 10];

$sum = 0;

foreach ($array as $num)
{
	$sum += $num ** 2;
}

echo sqrt($sum) . "\n";

echo "\nРабота с функциями округления:\n";

echo round(sqrt(379), 1) . "\n";

echo round(sqrt(379), 2) . "\n";

echo round(sqrt(379), 3) . "\n";

$array = [];

$array = [
	'floor' => floor(sqrt(587)),
	'ceil' => ceil(sqrt(587))
];

echo "\nРабота с min и max:\n";

$array = [4, -2, 5, 19, -130, 0, 10];

echo max($array) . "\n";

echo min($array) . "\n";

echo "\nРабота с рандомом:\n";

echo rand(1, 100) . "\n";

$array = [];

for ($i = 0; $i < 10; $i++)
{
	$array = rand(1, 100);
}

echo "\nРабота с модулем:\n";

echo abs($a - $b) . "\n";

$a = 1;

$b = 10;

echo abs($a - $b) . "\n";

$array = [];

$array = [1, 2, -1, -2, 3, -3];

$new_array = [];

foreach ($array as $num)
{
	array_push($new_array, abs($num));
}

echo "\nОбщее:\n";

$a = 30;

$del = [];

for ($i = $a; $i > 0; $i--)
{
	if ($a % $i === 0)
	{
		array_push($del, $i);
	}
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = 0;

for ($i = 0; $i < sizeof($array); $i++)
{
	$sum += $array[$i];

	if ($sum > 10)
	{
		echo $i + 1 . "\n";

		break;
	}
}

echo "\n15. Функции:\n";

function printStringReturnNumber() : int
{
	echo "String\n";

	return 1;
}

$my_num = printStringReturnNumber();

echo "$my_num\n";

echo "\n16. Функции:\n";

function increaseEnthusiasm(string $str) :string
{
	return $str . '!';
}

echo increaseEnthusiasm("Let's go") . "\n";

function repeatThreeTimes(string $str) :string
{
	return $str . $str . $str;
}

echo repeatThreeTimes("Let's go") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("Let's go")) . "\n";

function cut(string $str, int $cut_length = 10): string
{
	if (strlen($str) < $cut_length)
	{
		return $str;
	}

	$result = "";

	for ($i = 0; $i < $cut_length; $i++)
	{
		$result .= $str[$i];
	}

	return $result;
}

function printArray(array $array, int $i = 0): void
{
	if ($i === sizeof($array))
	{
		echo $array[$i] . "\n";

		return;
	}

	echo $array[$i] . "\n";

	printArray($array, $i + 1);
}

printArray($array);

function charSum(int $a): int
{
	$result = 0;

	while ($a > 0)
	{
		$result += $a % 10;

		$a /= 10;
	}

	if ($result > 9)
	{
		return charSum($result);
	}
	else
	{
		return $result;
	}
}

echo charSum(19);

echo "\n17. Массивы:\n";

$array = [
	"x",
	"xx",
	"xxx",
	"xxxx",
	"xxxxx"
];

function arrayFill(string $c, int $n): array
{
	$new_array = [];

	for ($i = 0; $i < $n; $i++)
	{
		array_push($new_array, $c);
	}

	return $new_array;
}

var_dump(arrayFill('x', 5));

$array = [[1,2,3],[4,5],[6]];

$result = 0;

foreach ($array as $sub)
{
	foreach ($sub as $num)
	{
		$result += $num;
	}
}

echo $result . "\n";

$array = [];

$c = 0;

for ($i = 0; $i < 3; $i++)
{
	$sub = [];

	for ($j = 0; $j < 3; $j++)
	{
		array_push($sub, $c += 1);
	}

	array_push($array, $sub);
}

var_dump($array);

$array = [2, 5, 3, 9];

$result = $array[0] * $array[1] + $array[2] * $array[3];

echo $result . "\n";

$user = [
	"name" => "Aleksandr",
	"surname" => "Popov",
	"patronymic" => "Vladislavovich"
];

echo $user["surname"] . ' ' . $user["name"] . ' ' . $user["patronymic"] . "\n";

$date = [
	'year' => "2022",
	'month' => "02",
	'day' => "04"
];

echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n";

$arr=['a','b','c','d','e'];

echo sizeof($arr) . "\n";

echo $arr[array_key_last($arr)] . "\n";

echo $arr[array_key_last($arr) - 1] . "\n";