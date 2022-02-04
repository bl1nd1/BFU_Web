<?php

echo "1. Доступ по ссылке: ";

$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;

$order .= " with the spicy sauce";

echo "\nYour order is: $very_bad_unclear_name.\n";