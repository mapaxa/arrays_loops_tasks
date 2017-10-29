<?php
//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = date('F');
foreach ($arr as $value) {
	echo ($value == $month) ? '<b>' . $value . '</b> <br>' : $value . '<br>';
}

 ?>