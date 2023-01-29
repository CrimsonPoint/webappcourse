<?php
$arr = array(
    "Петя" => 10000,
    "Коля" => 15000,
    "Иван" => 20000
);
function sum($arr)
{
    $result = 0;
    foreach($arr as $value)
    {
    	$result += $value;
    }
    return $result;
}
echo(sum($arr));
