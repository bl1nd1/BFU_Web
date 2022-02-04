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