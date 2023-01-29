<?php
$lang = 'en';
$arr;
$masRu = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$masEn = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
// 1 задание 
if($lang == "ru")
{
	$arr = $masRu;
}
if($lang == "en")
{
	$arr = $masEn;
}

// 2 задание
switch ($lang) {
    case 'ru':
        $arr = $masRu;
        break;
	case 'en':
        $arr = $masEn;
        break;
}
// 3 задание
$arrLang = [
	'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
	'en' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']];
