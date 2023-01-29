<?php
$arr = [-10,-20,30,50,60,80,-77,-44,2,-1];
$resultPositive = 0;
$resultNegative = 0;
foreach($arr as $a)
{
	if($a > 0) { $resultPositive += $a; }
	else $resultNegative+=$a;
}
echo "Сумма положительных: $resultPositive \nСумма отрицательных: $resultNegative";
