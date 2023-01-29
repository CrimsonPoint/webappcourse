<?php

function checkFunc($param){
	if(!is_int($param))
	{
		return "false";
	}
	else
	{
		if($param > 170)
			return "Big";
		else
			return "Small";
	}
};
echo(checkFunc("80"));
