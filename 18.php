<?php
//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$arr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
foreach ($arr as $value) {

	echo ($value == 'Sunday' || $value == 'Saturday') ? '<b>' . $value . '</b> <br>' : $value . '<br>';
}
 ?>