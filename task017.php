<?php

function createFunc($param){
	if(!is_int($param))
	{
		return "Err change param"; 
	}
	else
	{
		$result = floor($param / 7);
		$sa = ($param % 7)*1000;
		echo "Создано $result штук";
		if($sa > 0)
		{
			echo ", остаток - $sa грамм";
		}
	}
};
echo(createFunc(60));
