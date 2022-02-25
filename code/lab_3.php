<?php

echo "1(a) task\n";
$regex = "/a..b/";
$str = explode(' ', "ahb acb aeb aeeb adcb axeb");
foreach ($str as $word)
{
	if (preg_match($regex, $word))
	{
		echo $word . "\n";
	}
}

echo "1(b) task\n";
$regex = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($regex, function($matches) { return intval($matches[0]) ** 3; }, $str) . "\n";